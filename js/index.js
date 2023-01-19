$(document).ready(function () {
    $("#botao-agr-nao").click(function () {
        $("#modal-notificacao").hide();
    });
    $("#botao-eu-quero").click(function () {
        Notification.requestPermission(function(status) {
            alert(Notification.permission);
        });
    });
});

