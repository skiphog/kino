/**
 * Created by SkipHog on 31.05.2017.
 */
window.$ = window.jQuery = require('jquery')
import UIkit from 'uikit'
import Icons from 'uikit/dist/js/uikit-icons'

// loads the Icon plugin
UIkit.use(Icons)

$(document).ready(function () {

  $('#admin-article').on('click', '.delete', function () {
    const that = $(this)
    UIkit.modal.confirm('Удалить статью?').then(function() {
      that.next().submit()
    }, function () {

    });
  });

});