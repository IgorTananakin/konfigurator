// function showBasket(basket)
// {
//     $('#basket .modal-body').html(basket);
//     $('#basket').modal();
// }



// $('.add-to-basket').on('click', function (e)
// {
//     //e.preventDefault();//отменяю переход по сылки
//     var id = $(this).data('id');
//     return false;
//     alert('Ошибка');
//     //формирую ajax
//      $.ajax(
//          {
//            url: '/basket/add',//куда передаю
//              data: {id:id},//данные которые передаю
//              type:'GET',//как передаю
//              success: function(res){
//                  if (!res){alert('Ошибка товар не найден')}//условие на существование
//                 // console.log(res);
//                 showBasket(res);
//              },
//             error: function(){
//                  alert('Ошибка');
//              }
            
//          }
//      );
// });


$('.add-to-basket').on('click', function (e)
{
     e.preventDefault();//отменяю переход по сылки

 });