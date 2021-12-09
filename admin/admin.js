
//danh muc
const name_item = document.querySelectorAll('.home-product-item__name')
const search_item = document.getElementById('search-item')
const element_product = document.querySelectorAll('.product-all')
const filter_btn = document.querySelectorAll('#category-list .category-item')

Array.from(filter_btn).forEach(function (element) {
    element.addEventListener('click', function (e) {
        for(let i=0; i<filter_btn.length; i++) {
            filter_btn[i].classList.remove('category-item--active');
        }
        this.classList.add('category-item--active');
        
        let name_filter = element.dataset.filter;

    Array.from(element_product).forEach(function(item){
        if (item.dataset.item === name_filter)
        item.style.display = 'block';
        else {
            item.style.display = 'none';
        }
    })
    })
})
