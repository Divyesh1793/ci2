var url = window.location.origin;
var base_url = $('#base_url').val();
var login_chemist_id = $('#login_chemist_id').val();
var socket = io.connect( url+':5000' );

$(document).ready(function(){
    Push.Permission.request();
    //test
    $('.admin_notification_count').on('click',function(){
        updatecountdata();
    });

    $('.chemist_notification_count').on('click',function(){
        updatecountdatachemist();
    });
    

    socket.on('admin_notification', function( data ) {
        console.log(data.notification_id);
        
        var sound = 'https://dev.epharmaplatform.com/assets/notification.mp3';
        var timeout = 8000;
        var onclick_e = data.onclick_e;
        var icon = 'https://freeiconshop.com/wp-content/uploads/edd/notification-flat.png';
        //alert(data.subject);
        showDesktopNotification(data.subject, data.message, icon, sound, timeout,onclick_e)
        
        var count = $('.admin_notification_count').data('count');
        count = parseInt(count);
        count++;
        $('.admin_notification_count_view').html(count);
        $('.admin_notification_count_view2').html(count);
        $('.admin_notification_count').data('count',count);

        $('.admin_notification_count').on('click',function(){
            updatecountdata();
        });

        var html = '';
        //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
        html += '<li><a href="#" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
        $('.admin_notification_detail').prepend(html);
        //play(sound);
    });

    socket.on('chemist_notification', function( data ) {
        if (data.chemist_id == login_chemist_id) {
            console.log(data.notification_id);
        
            var sound = 'https://dev.epharmaplatform.com/assets/notification.mp3';
            var timeout = 8000;
            var onclick_e = data.onclick_e;
            var icon = 'https://freeiconshop.com/wp-content/uploads/edd/notification-flat.png';
            //alert(data.subject);
            showDesktopNotification(data.subject, data.message, icon, sound, timeout,onclick_e)
            
            var count = $('.chemist_notification_count').data('count');
            count = parseInt(count);
            count++;
            $('.chemist_notification_count_view').html(count);
            $('.chemist_notification_count_view2').html(count);
            $('.chemist_notification_count').data('count',count);

            $('.chemist_notification_count').on('click',function(){
                updatecountdatachemist();
            });

            var html = '';
            //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
            html += '<li><a href="#" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
            $('.chemist_notification_detail').prepend(html);
            //play(sound);   
        }
    });

    // $('.send_admin_notification').on('click',function(){
    //     socket.emit('admin_notification', { 
    //         notification_id: '1',
    //         subject: 'New Order Place',
    //         message: 'New Order Place and your order no is 0005',
    //         onclick_e: 'http://localhost/dhani/admin/dashboard',
    //         updated_at: '2020-03-20 00:00:00'
    //     });
    // });

});

function play(sound){
    var audio = new Audio(sound);
    audio.play();
}
function showDesktopNotification(subject, message, icon, sound, timeout,onclick_e) {
    if (!timeout) {
         timeout = 5000;
     }
    
    Push.create(subject, {
        body: message,
        icon: icon,
        timeout: timeout,               // Timeout before notification closes automatically.
        vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
        onClick: function() {
            // Callback for when the notification is clicked. 
            window.open(onclick_e, '_blank');
        }  
    });
}
function updatecountdata(){
    $.ajax({
        dataType: "json",
        type: "POST",
        url: base_url+'admin/Notification/read_admin_notification_count',
        data: {notify_user_type:'Admin'},
        success: function (data) {
            if (data == 100) {
                $('.admin_notification_count_view').html(0);
                $('.admin_notification_count').data('count',0);
            }
        }
    });
}

function updatecountdatachemist(){
   // alert();
    $.ajax({
        dataType: "json",
        type: "POST",
        url: base_url+'chemist/Dashboard/read_chemist_notification_count',
        data: {notify_user_type:'Vendor',user_id:login_chemist_id},
        success: function (data) {
            if (data == 100) {
                $('.admin_notification_count_view').html(0);
                $('.admin_notification_count').data('count',0);
            }
        }
    });
}