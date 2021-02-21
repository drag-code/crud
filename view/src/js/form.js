const remove = async (id, controller) => {
    const url = controller;
    $.ajax({
        url,
        type: "POST",
        cache: false,
        data: {
            type: 3,
            id
        },
        success: function (dataResult) {
            alert("Deleted");
            document.location = "http://localhost/CRUD/";
        }
    });
};

const btnsDelete = document.querySelectorAll(".delete");
btnsDelete.forEach((item) => {
    item.addEventListener("click", () => {
        const id = item.id;
        const controller = item.dataset.ct;
        console.log(id);
        if(confirm("¿Realmente desea eliminar este registro?"))
            remove(id, controller);
    });
});
