$(function(){
    $("form#adicionar").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: 'functions/adicionar.inc.php?acao=adicionar',
            data: $("form#adicionar").serialize(),
            type: 'POST',
            dataType: 'json',
            beforeSend: function() {
                $("#btnSubmit").attr("disabled", true)
            },
            success: function(data) {
                if(data.success){
                    Swal.fire({
                        title: 'Deseja cadastrar outra notícia?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim',
                        cancelButtonText: 'Não'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }else{
                            window.location.href = "index.php"
                        }
                      })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Por favor insira todos os dados!'
                    })
                }
            }
        })
    });
    
    $("form#editar").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: 'functions/adicionar.inc.php?acao=editar',
            data: $("form#editar").serialize(),
            type: 'POST',
            dataType: 'json',
            beforeSend: function() {
                $("#btnSubmit").attr("disabled", true)
            }, 
            success: function(data) {
                if(data.success){
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Notícia editada com sucesso!'
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Por favor insira todos os dados!'
                    })
                }
            }
        })
    });
    
});

function deleteNoticia(id){
    Swal.fire({
        title: 'Deseja excluir essa notícia?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'functions/adicionar.inc.php?acao=delete&id='+id,
                type: 'POST',
                data: {id: id},
                dataType: 'json',
                success: function(data) {
                    if(data.success){
                        Swal.fire({
                            icon: 'success',
                            title: 'Sucesso!',
                            text: 'Notícia excluída com sucesso!'
                        }).then((result) => {
                            location.reload();
                          });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.erroMsg
                        })
                    }
                }
            })
        }
      })
}