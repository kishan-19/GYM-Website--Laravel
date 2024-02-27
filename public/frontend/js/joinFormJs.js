const joinBtn_99 = document.querySelector('#joinFormBtn_99');
const joinBtn_15 = document.querySelector('#joinFormBtn_15');
const joinBtn_59 = document.querySelector('#joinFormBtn_59');
const priceInput = document.getElementById('priceI');

const addPrice = (price) => {
    priceInput.value = price;
}

joinBtn_15.addEventListener('click', () => addPrice('$15'));
joinBtn_99.addEventListener('click', () => addPrice('$99'));
joinBtn_59.addEventListener('click', () => addPrice('$59'));


// const joinBtn_99 = document.querySelector('#joinFormBtn_99');
// const joinBtn_15 = document.querySelector('#joinFormBtn_15');
// const joinBtn_59 = document.querySelector('#joinFormBtn_59');

// const addForm = (price) => {
//     // const priceForm =document.createElement('div');
//     //    priceForm.classList.add('span_containe');
//     const add_form = document.querySelector('.form-contain');

//     const htmlData =`<div class="form-row d-flex mb-2">
//     <div class="form-group col-sm-5">
//         <label for="inputFristName  ">First Name <span class="text-danger fs-4"> *</span></label>
//         <input type="text" name="Fname"
//             class="form-control" id=""
//             value="" placeholder="First Name">
//     </div>
//     <div class="form-group col-sm-5 m-auto">
//         <label for="inputLastName">Last Name</label>
//         <input type="text" name="Lname"
//             class="form-control" id=""
//             value="" placeholder="Last Name">
//     </div>
// </div>
// <div class="form-group mb-2">
//     <label for="inputAddress">Address <span class="text-danger fs-4"> *</span></label>
//     <input type="text" name="Address" class="form-control"
//         id="inputAddress" value=""
//         placeholder="1234 Main St">
// </div>
// <div class="form-group mb-2">
//     <label for="inputAddress2">Address 2</label>
//     <input type="text" name="Address2"
//         class="form-control" id="inputAddress2"
//         value=""
//         placeholder="Apartment, studio, or floor">
// </div>
// <div class="form-row d-flex mb-2">
//     <div class="form-group col-sm-5">
//         <label for="inputCity">City <span class="text-danger fs-4"> *</span></label>
//         <input type="text" name="City"
//             class="form-control" id=""
//             value="" placeholder="City">
//     </div>
//     <div class="form-group col-sm-5 m-auto">
//         <label for="inputPin">Pin Code <span class="text-danger fs-4"> *</span></label>
//         <input type="number" name="PinCode"
//             class="form-control" id=""
//             value="" placeholder="ex:363655">
//     </div>
// </div>
//  <div class="form-group col-lg-2 col-sm-3 mb-2">
//     <label for="inputPrice">Price</label>
//     <input type="text" name="price" class="form-control"
//         id="inputAddress" value="${price}" disabled>
// </div>
// <div class="form-row d-flex mb-2">
//     <div class="form-group col-sm-5">
//         <label for="inputPhoneNumber">Phone Number <span class="text-danger fs-4"> *</span></label>
//         <input type="number" name="PhoneNumber"
//             class="form-control" id=""
//             value="" placeholder="(000) 000-000">
//     </div>
//     <div class="form-group col-sm-5 m-auto">
//         <label for="inputGender">Gender</label><br>
//         <label class="form-check-label "
//             for="flexRadioDefault1">
//             <input class="form-check-input" type="radio"
//                 name="Gender" value="Male" name="flexRadioDefault"
//                 id="">
//             Male
//         </label>
//         <label class="form-check-label "
//             for="flexRadioDefault2">
//             <input class="form-check-input" type="radio"
//                 name="Gender" value="Female" name="flexRadioDefault"
//                 id="">
//             Female
//         </label>
//         <label class="form-check-label"
//             for="flexRadioDefault2">
//             <input class="form-check-input" type="radio"
//                 name="Gender" value="Other" name="flexRadioDefault"
//                 id="">
//             Other
//         </label>
//     </div>
// </div>
// <div class="form-group col-lg-7 col-sm-10 mb-2">
//     <label for="inputAddress">Email</label>
//     <input type="Email" name="Email" class="form-control"
//         id="inputAddress" value=""
//         placeholder="ex:abc12@gamil.com">
// </div>

// <!-- Modal body  Emergency Contact Information -->

// <hr class="mb-0">
// <div class="modal-body">
//     <h5 class="modal-title mb-2"> Emergency Contact Information
//     </h5>
//     <div class="form-row d-flex mb-2">
//         <div class="form-group col-sm-5">
//             <label for="inputEmFristName">First Name <span class="text-danger fs-4"> *</span></label>
//             <input type="text" name="EmFname"
//                 class="form-control" id=""
//                 value="" placeholder="First Name">
//         </div>
//         <div class="form-group col-sm-5 m-auto">
//             <label for="inputEmLastName">Last Name</label>
//             <input type="text" name="EmLname"
//                 class="form-control" id=""
//                 value="" placeholder="Last Name">
//         </div>
//     </div>
//     <div class="form-group col-lg-7 col-sm-10 mb-2">
//         <label for="inputEmPhoneNumber">Phone Number <span class="text-danger fs-4"> *</span></label>
//         <input type="number" name="EmPhonerNumber"
//             class="form-control" id=""
//             value="" placeholder="(000) 000 000">
//     </div>
//     <div class="form-group mt-2 col-lg-7 col-sm-10 mb-2">
//         <label for="inputEmPhoneNumber">Relationship</label>
//         <select class="form-select" name="EmRelationship"
//             aria-label="Default select example">
//             <option selected>Please Select</option>
//             <option value="Spouse">Spouse</option>
//             <option value="Sibling">Sibling</option>
//             <option value="parent">Parent</option>
//             <option value="Friend">Friend</option>
//             <option value="Other">Other</option>
//         </select>
//     </div>
// </div>
// `;
//     add_form.insertAdjacentHTML('afterbegin', htmlData);

// }
// joinBtn_99.addEventListener('click', () => addForm('$99'));
// joinBtn_15.addEventListener('click', () => addForm('$15'));
// joinBtn_59.addEventListener('click', () => addForm('$59'));
