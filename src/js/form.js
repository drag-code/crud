const deleteUser = async (id) => {
    const url = "http://localhost/CRUD/main/delete";
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
        deleteUser(id);
    });
});
