"use strict"

const URL = "api/reviews/";

let reviews = [];

let form = document.querySelector('#reviewForm');
form.addEventListener('submit', addReview);
let orderForm= document.querySelector('#filterForm');
orderForm.addEventListener('submit', orderReviews);

async function getAll() {
    try {
        let response = await fetch(URL);
        if (!response.ok) {
            throw new Error('Recurso no existe');
        }
        tasks = await response.json();
    } catch(e) {
        console.log(e);
    }
}
async function getReviews() {
    try {
      let id = e.target.dataset.review;
      let response = await fetch(URL+ "/" + id);
      let reviews = await response.json();
  
      console.log(reviews);
  
      app.reviews = reviews;
  
      console.log(id_);
    } catch (error) {
      console.log(error);
    }
  }
async function insertReview(e) {
    e.preventDefault();
    
    let data = new FormData(form);
    let review = {
        id_review: null,
        review: data.get('reviewBody'),
        punctuation: data.get('punctuation'),
        item: data.get('item'),
    };

    try {
        let response = await fetch(URL, {
            method: "POST",
            headers: { 'Content-Type': 'application/json'},
            body: JSON.stringify(review)
        });
        if (!response.ok) {
            throw new Error('Error del servidor');
        }

        let nReview = await response.json();

        // inserto la tarea nuevo
        reviews.push(nReview);
        showReviews();

        form.reset();
    } catch(e) {
        console.log(e);
    }
} 

async function deleteReview(e) {
    e.preventDefault();
    try {
        let id = e.target.dataset.review;
        let response = await fetch(URL + id, {method: 'DELETE'});
        if (!response.ok) {
            throw new Error('Recurso no existe');
        }

        // eliminar la tarea del arreglo global
        reviews = reviews.filter(review => review.id != id);
        showReviews();
    } catch(e) {
        console.log(e);
    }
}

function showReviews() {
    let reviewList = document.querySelector("#reviewContainer");
    reviewList.innerHTML = "";
    for (const review of reviews) {

        let html = `
            <div>
                <p>${review.item}</p>
                <p>${review.review}</p>
                <p>${review.punctuation} estrellas/p>
                <a href='#' data-review="${review.id}" type='button' class='btn btn-danger btn-delete'>Borrar</a>
            </div>
        `;

        ul.innerHTML += html;
    }
    const btnsDelete = document.querySelectorAll('a.btn-delete');
    for (const btnDelete of btnsDelete) {
        btnDelete.addEventListener('click', deleteReview());
    }
}

getAll();