const searchBar = document.querySelector(".user .search input");
const searchBtn = document.querySelector(".user .search button");
const userList = document.querySelector(".user .user-list");

searchBtn.onclick = () =>
 {
    searchBar.classList.toggle('active');
    searchBar.focus();
    searchBtn.classList.toggle('active');
}
searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/user.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    userList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500);

