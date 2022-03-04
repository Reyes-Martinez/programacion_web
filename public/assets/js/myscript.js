$(document).ready(() => {
    $("#btn-load").click(() => {
        $.get("http://127.0.0.1:8001/json2").done((data) => {
            console.table(data);
            $.each(data, (key, product) => {
                $("#tblProducts > tbody:last-child").append(
                    "<tr>" +
                        "<td class='text-center' width='10'>" +
                        product.id +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.name +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.price +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.old_price +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.quantity +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.quantity_comments +
                        "</td>" +
                        "<td class='text-center' width='10'>" +
                        product.category_id +
                        "</td>" +
                        "<td class='text-center' width='150'>" +
                        product.description +
                        "</td>" +
                        "</tr>"
                );
            });
        });
    });
});
