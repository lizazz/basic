$(document).ready(function() {
	var _get = {};
    location.search.substr(1).replace(/([^=&]+)=([^&]*)/g, function(o, k, v) {
       _get[decodeURIComponent(k)] = v;
    });

    $(".main_image").on("click", function(){
        $(".main_image").toggleClass("hidden");
    });

    //указываем по какой колонке идет сортировка
     $(".glyphicon").addClass("hidden");
    $(".order_"+_get.order).removeClass("hidden");

    //меняем сортировку при выводе пользователей
	$(".sort").on("click", function(){
		var c = $(this).attr('data-sort');
        //если сортировка меняется не на первой странице - надо загрузить первую страницу
        if(_get.page>1){
            location.href = "/?r=user%2Findex&page=1&order="+c;
        }
        $(".glyphicon").addClass("hidden");
        $(".order_"+c).removeClass("hidden");
        $.ajax({
                    type: "GET",
                    url: "/?r=user/sort",
                    data: "&order="+c,
                    success: function(result){
                       $("tbody").html(result); 
                       $(".pagination").children().find("a").each(function(){
                            var a=$(this).attr("href");
                            $(this).attr("href",a+"&order="+c);
                        });
                    },        
                    error:function(){ 
                        alert("Возникли проблемы с отправкой формы");
                    }
            })
        return false;
	});


})