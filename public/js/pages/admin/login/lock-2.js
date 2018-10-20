var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        "../images/pages/admin/login/bg/1.jpg",
                "../images/pages/admin/login/bg/2.jpg",
                "../images/pages/admin/login/bg/3.jpg",
                "../images/pages/admin/login/bg/4.jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();

jQuery(document).ready(function() {
    Lock.init();
});