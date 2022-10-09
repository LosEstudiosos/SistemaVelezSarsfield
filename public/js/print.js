$(function () {
    $('#btnPrint').click(function() {
        $('#print-content').print({
        	globalStyles: true,
        	mediaPrint: false,
        	stylesheet:  "/css/print.css",
        	noPrintSelector: ".no-print",
        	iframe: true,
        	append: null,
        	prepend: null,
        	manuallyCopyFormValues: true,
        	deferred: $.Deferred(),
        	timeout: 750,
        	title: null,
        	doctype: '<!doctype html>'
	    });
    });
  })