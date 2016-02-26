<?php
Class Modules extends Project {
	private $item;

	public function getModule($item) {
		$this->item = $item;

		switch ($this->item['data']['mode']) {
			case '1':{
					return $this->module_getPage();
				}break;

			case '2':{
					return $this->module_getNewsList();
				}break;

			case '3':{
					return $this->module_getNewsItem();
				}break;

			case '4':{
					return $this->module_getPortfolio();
				}break;

			case '5':{
					return $this->module_getPortfolioItem();
				}break;

			case '100':{
					return $this->module_getSitemap();
				}break;

			default:{
					die('Не выбран модуль-обработчик для узла!');
				}break;
		}
	}

	private function module_getPage() {
		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $this->item['data']['name'],
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $this->getBreadCrumbs($this->item['data']['id']),
			'content' => $this->getPage($this->item['data']['content_id'])
		);
	}

	private function module_getNewsList() {
		$where = '';
		$h1_addition = '';
		$bc_addition = array();

		if ($_GET['mode'] == 'tags' && $_GET['tag']) {
			$where = " && `d`.`col_163` LIKE '%" . $this->db->quote($_GET['tag']) . "%'";

			$h1_addition = 'Записи с тегом &laquo;' . strip_tags($_GET['tag']) . '&raquo;';

			$bc_addition = array(
				'current' => true,
				'name' => $h1_addition,
			);
		}

		$data = $this->getStructureWithSectionData(
			6,
			$this->item['data']['id'],
			3,
			'section_19',
			array(
				array('col_132', 'date'),
				array('col_136', 'announce'),
				array('col_163', 'tags')
			),
			$where,
			'col_132',
			'DESC'
		);

		$h1 = $h1_addition;
		$bc = $this->getBreadCrumbs($this->item['data']['id']);

		if (!empty($bc_addition)) {
			$bc[count($bc) - 1]['current'] = false;
			array_push($bc, $bc_addition);
		}

		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $h1,
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $bc,
			'items' => $data['items'],
			'pager' => $data['pager'],
		);

		$this->page['content'] = $this->smarty->fetch('modules/news-list.tpl');
	}

	private function module_getNewsItem() {
		$data = $this->getStructureItemWithSectionData(
			'section_19',
			$this->item['data']['content_id'],
			array(
				array('col_132', 'date'),
				array('col_134', 'text'),
				array('col_163', 'tags')
			)
		);

		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $this->item['data']['name'],
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $this->getBreadCrumbs($this->item['data']['id']),
			'item' => $data,
		);

		$this->page['content'] = $this->smarty->fetch('modules/news-item.tpl');
	}

	private function module_getSitemap() {
		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $this->item['data']['name'],
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $this->getBreadCrumbs($this->item['data']['id']),
			'data' => $this->getSitemapBranch(0)
		);

		$this->page['content'] = $this->smarty->fetch('modules/sitemap.tpl');
	}

	private function module_getPortfolio() {
		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $this->item['data']['name'],
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $this->getBreadCrumbs($this->item['data']['id'])
		);

		$this->page['content'] = $this->smarty->fetch('modules/portfolio.tpl');
	}

	private function module_getPortfolioItem() {
		$data = $this->getStructureItemWithSectionData(
			'section_20',
			$this->item['data']['content_id'],
			array(
				array('col_171', 'subname'),
				array('col_173', 'template'),
				array('col_169', 'type'),
				array('col_176', 'taskname'),
				array('col_178', 'date'),
				array('col_175', 'text_short'),
				array('col_183', 'text'),
				array('col_185', 'site')
			)
		);

		$this->page = array(
			'id' => $this->item['data']['id'],
			'path' => $this->item['data']['path'],
			'pid' => $this->item['data']['pid'],
			'title' => $this->item['data']['title'],
			'description' => $this->item['data']['description'],
			'keywords' => $this->item['data']['keywords'],
			'h1' => $this->item['data']['name'],
			'mode' => $this->item['data']['mode'],
			'breadcrumbs' => $this->getBreadCrumbs($this->item['data']['id']),
			'item' => $data,
		);

		$this->page['content'] = $this->smarty->fetch('modules/portfolio/' . $data['template'] . '.tpl');
	}
}