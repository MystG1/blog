
let listArticles = document.querySelectorAll(".listArticle");

listArticles.forEach(listItem => {
    
    listItem.addEventListener("mouseenter", () => {
       
        let titleArticle = listItem.querySelector(".titleArticle");
        let descriptionArticle = listItem.querySelector(".descriptionArticle");

   
        if (titleArticle) {
            titleArticle.style.color = "rgba(28,113,147,255)"; 
        }
        if (descriptionArticle) {
            descriptionArticle.style.color = "rgba(98,147,181,255)"; 
        }
    });

    listItem.addEventListener("mouseleave", () => {
        let titleArticle = listItem.querySelector(".titleArticle");
        let descriptionArticle = listItem.querySelector(".descriptionArticle");
        if (titleArticle) {
            titleArticle.style.color = "";
        }
        if (descriptionArticle) {
            descriptionArticle.style.color = ""; 
        }
    });
});
const avatarImages = document.querySelectorAll('.avatarImage');
function toggleBorder() {
    avatarImages.forEach(image => {
        image.classList.remove('avatarSelected');
    });
    this.classList.add('avatarSelected');
}
avatarImages.forEach(image => {
    image.addEventListener('click', toggleBorder);
});


