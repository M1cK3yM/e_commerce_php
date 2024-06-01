function toggleCategory(categoryId) {
    const category = document.getElementById(categoryId);
    if (category.style.display === 'block') {
        category.style.display = 'none';
    } else {
        category.style.display = 'block';
    }
}

function toggleSubcategory(subcategoryId) {
    const subcategory = document.getElementById(subcategoryId);
    if (subcategory.style.display === 'block') {
        subcategory.style.display = 'none';
    } else {
        subcategory.style.display = 'block';
    }
}

