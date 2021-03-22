// resources/assets/js/app.js
require('./bootstrap');
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
//add as many widget as you may need
$('#datepicker').datepicker();




