document.querySelectorAll('.modal-close').forEach(item => {
    item.addEventListener("click",function(){
        console.log("hey")
        document.querySelectorAll('.mymodal').forEach(one => {
            one.style.display = 'none';
        })
    })
})