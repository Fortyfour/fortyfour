var core = {
    availableTags: [
        'Accordtec',
        'ACTI',
        'Activision',
        'Ademco',
        'Advocam',
        'Alarmico',
        'AMC',
        'Arstel',
        'Axis',
        'BAS-IP',
        'Berger',
        'BestDVR',
        'Beward',
        'BOSCH',
        'CAME',
        'CARDIN',
        'Ceia',
        'CISA',
        'CNB',
        'Commax',
        'ComOnyx',
        'Computar'
    ],

    autocompleteBind: function(){
        $('#brand-search-input, #catalog-search-input').autocomplete({
            source: this.availableTags
        });

        $('#catalog-search-input').attr('placeholder', 'Введите название товара, например: ' + this.availableTags[Math.floor(Math.random() * this.availableTags.length)]);
    },

    init: function(){
        this.autocompleteBind();

        $('#catalog-search-input').focus();
    }
};

$(function(){
    core.init();
});