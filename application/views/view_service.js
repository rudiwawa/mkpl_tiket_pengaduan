$(document).ready(function(){ 
        
            $.ajax({ 
    type: 'GET', 
    url: 'http://localhost/PKL/admin_4/view_service.php', 
    data: { get_param: 'value' }, 
    dataType: 'json',
    success: function (data) { 
        $.each(data, function(index, element) {
            
            if (element.pengirim == 'client') {
                $('#coba').append('<div class="timeline-item-right"><div class="timeline-badge-right"><img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_1.jpg"> </div><div class="timeline-body-right"><div class="timeline-body-arrow-right"></div><div class="timeline-body-head-right"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '+element.time+' </span><a href="javascript:;" class="timeline-body-title font-blue-madison"> '+element.client+' </a></div></div><div class="timeline-body-content"><span class="font-grey-cascade" style="float: right;"> '+element.isi+' </span></div></div></div>');
            } else {
                $('#coba').append('<div class="timeline-item"><div class="timeline-badge"><img class="timeline-badge-userpic" src="../assets/pages/media/users/avatar80_2.jpg"></div><div class="timeline-body"><div class="timeline-body-arrow"></div><div class="timeline-body-head"><div class="timeline-body-head-caption"> <span class="timeline-body-time font-grey-cascade">Replied at '+element.time+' </span><a href="javascript:;" class="timeline-body-title font-blue-madison">'+element.user+'</a></div></div><div class="timeline-body-content"><span class="font-grey-cascade"> '+element.isi+' </span></div></div></div>');
            }
        });
    }
});
       });     