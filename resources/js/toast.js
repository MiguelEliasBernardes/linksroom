const toast = document.getElementById('toast');

setTimeout(() => {

    if(toast) {
        toast.classList.add('opacity-0');
        setTimeout(() => {
            toast.remove()
        },500)
    }
},3000)
