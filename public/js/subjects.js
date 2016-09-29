$('.delete-subject').on('click', function(){
    if(confirm('Are you sure you want to delete subject?')){
        // do some ajax for deleting
        var delete_id = $(this).attr('delete-id');
        if(delete_id != ''){
            $.ajax({
                url: 'delete-subject/'+delete_id,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    if(data.success){
                        location.reload();
                    }else if(!data.success){

                    }
                }
            });
        }
    }else{
        return false;
    }
});