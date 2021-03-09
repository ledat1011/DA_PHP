var socket = io.connect('http://localhost:3000');/*kết nối tới socket*/
function myFunction() {
     var x = document.getElementById('selectCity').value; /*lấy giá trị id "mySelect"*/
     socket.emit('takeSelect',x); /*gửi giá trị về socket*/
    socket.on("result",function(data){   /*lấy giá trọ khi socket xử lý xong*/
     $("#selectDistric").children().remove(); /*xóa hết dữ liệu cũ của id "mySelct"*/
     var a = [];
        if(data.length == 0 || data == undefined){
         $("#selectDistric").children().remove();
         $("#selectWard").children().remove();
         $("#selectDistric").append( ' <option value ="" selected>Quận huyện</option>');
         $("#selectWard").append( ' <option value ="" selected>Phường/Xã</option>');
        }else if(data.length > 1 || data != undefined){
            $("#selectDistric").append( ' <option value ="" selected>Quận huyện</option>');
         for(var i = 0 ; i< data.length; i++){
             a.push( data[i].tenQuan)
         $("#selectDistric").append( "<option value="+"'" + a[i] +"'"+">"+a[i]+"</option>");
        }
        }      
    });
 }
function functionDis(){
 var y = document.getElementById('selectDistric').value;
     socket.emit('selectDis',y);
    socket.on("updatewards",function(datas){
        var a =[];
        $("#selectWard").children().remove();
        $("#selectWard").append( ' <option value ="" selected>Phường/Xã</option>');
        if(datas.length == 0 || datas == undefined){
         $("#selectWard").children().remove();
         $("#selectWard").append( ' <option value ="" selected>Phường/Xã</option>');
        }else if(datas.length > 1 || datas != undefined){
            $("#selectWard").append( ' <option value ="" selected>Phường/Xã</option>');
         for(var i = 0 ; i< datas.length; i++){
             a.push(datas[i].tenPhuong)
         $("#selectWard").append( "<option value="+"'" + a[i] +"'"+">"+a[i]+"</option>");
        }
        }
    });
 }