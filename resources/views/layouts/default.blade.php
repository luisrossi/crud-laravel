@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
        function ConfirmaExclusao(elem, id) {
            swal.fire({
                title: 'Confirma a exclusão?', 
                text: 'Esta ação não poderá ser revertida!',
                type: 'warning', 
                showCancelButton: true, 
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33', 
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar!', 
                closeOnConfirm: false, 
            }).then(function(isConfirm) {
                if (isConfirm.value) {
           		 	$.get('/'+ @yield('table-delete') +'/destroy?id='+id, function(data){
                        console.log(data);
                        if (data.status == 200) {
                            swal.fire(
                                'Deletado!',
                                'Exclusão confirmada.',
                                'success'
                            ).then(function(isConfirm) {
                                    $(elem).closest('tr').hide(500);
                            });
                        } else {
                            swal.fire(
                                'Erro!',
                                'Ocorreram erros na exclusão. Entre em contato com o suporte.',
                                'error'
                            );
                        }
                    });
                }
            })
        }
    </script>
@stop


@section('css')
    <style type="text/css">
        .card-header {
            background: #105fb5;
            padding: 3px 0px 0px 10px;
            color: #fff;
        }
        .card-header h3 {
            font-size: 1.25rem;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 7px 0px;
        }
    </style>
@stop