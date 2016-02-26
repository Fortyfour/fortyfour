<?php
/*
 * Этот класс используется для расширения функционала ядра системы (/classes/Core.php)
 * */

Class Project extends Utilities
{
    public function __construct()
    {
        //Additions
        include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Simpleimage.class.php';
        $this->securimage = new Securimage();

        //Create login objct
        $this->login = new Login($this, array());

        //Operate ajax calls
        $this->operateAJAX();

        /*if (isset($_GET['action']) && $_GET['action'] == 'exit') {
            $this->login->exitUser();
            header('Location:' . $this->uri);
        };*/

        /*$this->operateOauth();*/
    }

    private function operateAJAX()
    {
        if ($this->answer_type == 'ajax') {
            switch ($_GET['action']) {
                case 'getOrderItems' : {
                    header('Content-type: text/json');
                    print json_encode($this->getOrderItems());
                } break;

                case 'offer' : {
                    header('Content-type: text/json');
                    print json_encode($this->processOffer());
                } break;
            };

            exit;
        }
    }

    private function operateOauth()
    {
        if (isset($_GET['oauth'])) {
            $this->login->oAuth();
            exit;
        };
    }

    private function ajaxTest()
    {
        return 'Test ok!';
    }

    public function getInlineMenu($menu_id = false, $pid = false)
    {
        $additional = '';
        $menu = '';
        $pid_add = '';

        if ($pid) {
            $pid_add = " && `structure`.`pid` = " . intval($pid);
        };

        if ($menu_id > 0) {
            $menu = "`structure_data`.`menu` = " . intval($menu_id) . " && ";
        };

        $query = "
                SELECT
                    `structure_data`.`id` AS `id`,
                    `structure_data`.`name` AS `name`,
                    `structure_data`.`path` AS `path`,
                    `structure`.`pid` AS `pid`
                FROM
                    `structure_data`,
                    `structure`
                WHERE
                    " . $menu . "
                    `structure_data`.`publish` = 1 &&
                    `structure_data`.`id` = `structure`.`id` " . $pid_add . $additional . "
                ORDER BY
                    `sort` ASC
            ";

        return $this->db->assocMulti($query);
    }

    //Get page
    public function getPage($id)
    {
        $query = "
                SELECT
                    `col_33` AS `text`
                FROM
                    `section_3`
                WHERE
                    `id` = " . intval($id) . "
            ";

        $result = $this->db->assocItem($query);
        return $result['text'];
    }

    //Returns array of specified branch
    public function getBranchMenu($id = 1, $menu)
    {
        $query = "
                SELECT
                    `structure`.`id`,
                    `structure_data`.`name`,
                    `structure_data`.`path`
                FROM
                    `structure`,
                    `structure_data`
                WHERE
                    `structure`.`pid` = " . intval($id) . " &&
                    `structure`.`id` = `structure_data`.`id` &&
                    `structure_data`.`menu` = " . intval($menu) . "
                ORDER BY
                    `structure_data`.`sort` ASC
            ";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $row['childrens'] = $this->getBranchMenu($row['id'], $menu);
            $rows[] = $row;
        };

        return $rows;
    }


    /************************************************************
     * CUSTOM METHODS WRITE BELOW THIS BLOCK
     ************************************************************/
    //Sitemap
    public function getSitemapBranch($pid)
    {
        $query = "
                    SELECT
                        `structure`.`id`,
                        `structure_data`.`name`,
                        `structure_data`.`path`
                    FROM
                        `structure`,
                        `structure_data`
                    WHERE
                        `structure`.`pid` = " . intval($pid) . " &&
                        `structure`.`id` = `structure_data`.`id` &&
                        `structure_data`.`publish` = 1 &&
                        `structure_data`.`mode` NOT IN(3, 8)
                    ORDER BY
                        `structure_data`.`sort` ASC
                ";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $row['childrens'] = $this->getSitemapBranch($row['id']);
            $rows[] = $row;
        };

        return $rows;
    }

    //News short
    public function getNewsShort($limit)
    {
        $query = "
            SELECT
                s.id AS structure_id,
                s.name AS structure_name,
                s.path AS path,
                s.publish AS publish,

                d.id AS id,
                d.name AS name,
                d.col_132 AS date,
                d.col_136 AS announce,
                d.col_134 AS text
            FROM
                structure_data s
            LEFT JOIN
                section_19 d ON (d.id = s.content_id)
            WHERE
                s.publish = 1 && s.mode = 3
            ORDER BY
                d.col_132
            DESC
            LIMIT " . intval($limit);

        return $this->db->assocMulti($query);
    }

    //Get projects
    public function getPortfolio($limit = false, $type = false){
        $limit_q = "";
        $type_q = "";

        if ($limit !== false) {
            $limit_q = " LIMIT " . intval($limit);
        }

        if($type !== false){
            switch($type){
                case 'sites' : {
                    $t_int = 1;
                } break;

                case 'logotypes' : {
                    $t_int = 2;
                } break;

                case 'applications' : {
                    $t_int = 3;
                } break;
            }

            if($t_int > 0){
                $type_q = " && d.col_169 = " . $t_int;
            }
        }

        $query = "
            SELECT
                s.id AS structure_id,
                s.name AS structure_name,
                s.path AS path,
                s.publish AS publish,

                d.id AS id,
                d.name AS name,
                d.col_171 AS subname
            FROM
                structure_data s
            LEFT JOIN
                section_20 d ON (d.id = s.content_id)
            WHERE
                s.publish = 1 &&
                s.mode = 5 " . $type_q . "
            ORDER BY
                d.col_178 DESC
            " . $limit_q;

        return $this->db->assocMulti($query);
    }

    private function getOptionsByIds($ids){
        if(empty($ids)){
            return false;
        }

        $ids_p = implode(',', $ids);

        $query = "
            SELECT
                `id`,
                `sort`,
                `publish`,
                `name`,
                `col_203` AS `price`
            FROM
                section_22
            WHERE
                id IN(" . $this->db->quote($ids_p) . ")
            ORDER BY
                sort ASC
        ";

        $result = $this->db->assocMulti($query);

        return $result;
    }

    public function getOrderItems(){
        $result = new stdClass();

        $result->types = array(
            (object) array('id' => 1, 'name' => 'Интернет-магазин'),
            (object) array('id' => 2, 'name' => 'Корпоративный сайт'),
            (object) array('id' => 3, 'name' => 'Сайт-визитка'),
            (object) array('id' => 4, 'name' => 'Свой проект')
        );

        $query = "
            SELECT
                id,
                name
            FROM
                section_21
            WHERE
                publish = 1
            ORDER BY
                sort ASC
        ";

        $result->groups = $this->db->assocMulti($query);

        $query = "
            SELECT
                `id`,
                `sort`,
                `publish`,
                `name`,
                `col_208` AS `group`,
                `col_206` AS `necessary`,
                `col_198` AS `types`,
                `col_203` AS `price`,
                `col_204` AS `old_price`
            FROM
                section_22
            WHERE
                publish = 1
            ORDER BY
                sort ASC
        ";

        $result->props = $this->db->assocMulti($query);

        return $result;
    }

    public function mobileBrowser(){
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
            return true;
        }
    }

    private function processOffer(){
        $constants = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/constants.ini', true);

        $result = new stdClass();

        $data = (object) $_POST;

        $this->mail_vars = new stdClass();
        $this->mail_vars->subject = 'Заказ на разработку сайта';

        $this->mail_vars->form_details = (object) $data->form_details;
        $this->mail_vars->form_contacts = (object) $data->form_contacts;

        switch($data->type){
            case 1: {
                $this->mail_vars->type_name = 'Интернет-магазин';
            } break;

            case 2: {
                $this->mail_vars->type_name = 'Корпоративный сайт';
            } break;

            case 3: {
                $this->mail_vars->type_name = 'Сайт-визитка';
            } break;

            case 4: {
                $this->mail_vars->type_name = 'Свой проект';
            } break;
        }

        $this->mail_vars->options = $this->getOptionsByIds($data->props);

        $body = $this->smarty->fetch('mailing-order.tpl');

        if(!Utilities::matchPattern($this->mail_vars->form_contacts->email, 'email')){
            $result->status = false;
            $result->message = 'Некорректный адрес почты';

            return $result;
        };

        Utilities::sendMail(
            'order@' . $_SERVER['SERVER_NAME'],
            'order@' . $_SERVER['SERVER_NAME'],
            urldecode($constants['common']['send_email'][0]),
            'Заказ на разработку сайта', false, $body
        );

        Utilities::sendMail(
            'order@' . $_SERVER['SERVER_NAME'],
            'order@' . $_SERVER['SERVER_NAME'],
            $this->mail_vars->form_contacts->email,
            'Заказ на разработку сайта', false, $body
        );

        $result->status = true;
        $result->message = 'Ok';

        return $result;
    }
}