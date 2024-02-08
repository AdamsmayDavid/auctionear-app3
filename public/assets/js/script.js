// start: Sidebar
// document.querySelector('.chat-sidebar-profile-toggle').addEventListener('click', function(e) {
//     e.preventDefault()
//     this.parentElement.classList.toggle('active')
// })

// document.addEventListener('click', function(e) {
//     if(!e.target.matches('.chat-sidebar-profile, .chat-sidebar-profile *')) {
//         document.querySelector('.chat-sidebar-profile').classList.remove('active')
//     }
// })
// end: Sidebar



// start: Coversation
// document.querySelectorAll('.conversation-item-dropdown-toggle').forEach(function(item) {
//     item.addEventListener('click', function(e) {
//         e.preventDefault()
//         if(this.parentElement.classList.contains('active')) {
//             this.parentElement.classList.remove('active')
//         } else {
//             document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
//                 i.classList.remove('active')
//             })
//             this.parentElement.classList.add('active')
//         }
//     })
// })

document.addEventListener('click', function(e) {
    if(!e.target.matches('.conversation-item-dropdown, .conversation-item-dropdown *')) {
        document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
            i.classList.remove('active')
        })
    }
})

document.querySelectorAll('.conversation-form-input').forEach(function(item) {
    item.addEventListener('input', function() {
        this.rows = this.value.split('\n').length
    })
})

document.querySelectorAll('[data-conversation]').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        document.querySelectorAll('.conversation').forEach(function(i) {
            i.classList.remove('active')
        })
        document.querySelector(this.dataset.conversation).classList.add('active')
    })
})

document.querySelectorAll('.conversation-back').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        this.closest('.conversation').classList.remove('active')
        document.querySelector('.conversation-default').classList.add('active')
    })
})


 


// function sendMessage(){



//     let message_wrap = document.createElement('div');
//     message_wrap.classList.add('conversation-item');

//     let message_box = document.createElement('div');
//     message_box.classList.add('conversation-item-box');

//     message_wrap.appendChild(message_box);

//     let message_text = document.createElement('div');
//     message_text.classList.add('conversation-item-text');

//     message_box.appendChild(message_text);

//     let message_par = document.createElement('p');
//     message_par.innerText = "Hello";

//     message_text.appendChild(message_par);

//     let message_time = document.createElement('div');
//     message_time.classList.add('conversation-item-time');
//     message_time.innerText = "12:01";

//     message_text.appendChild(message_time);


//     document.getElementById("convo").append(message_wrap);

// }

       









// end: Coversation


// for message event listener
// const socket = io();

//   // Receive new message event
//         socket.on('message', data => {
//             const chatBox = document.getElementById('chat-box');
//             chatBox.innerHTML += `<p><strong>${data.username}</strong>: ${data.message}</p>`;
//         });

//         // Receive user joined event
//         socket.on('userJoined', username => {
//             const chatBox = document.getElementById('chat-box');
//             chatBox.innerHTML += `<p><em>${username} joined the chat</em></p>`;
//         });

//         // Receive user left event
//         socket.on('userLeft', username => {
//             const chatBox = document.getElementById('chat-box');
//             chatBox.innerHTML += `<p><em>${username} left the chat</em></p>`;
//         });

//         // Send message when Enter key is pressed
//         document.getElementById('message').addEventListener('keydown', function(event) {
//             if (event.key === 'Enter') {
//                 sendMessage();
//             }
//         });

//         function sendMessage() {
//             const message = document.getElementById('message').value;
//             const chatBox = document.getElementById('chat-box');
//             const username = document.getElementById('username').value;
            
//             if (message.trim() !== '') {
//                 socket.emit('sendMessage', message);
//                 chatBox.innerHTML += `<p><strong>${username}</strong>: ${message}</p>`;
//                 document.getElementById('message').value = '';
//             }
//         }














//  // end update bbp

//  let row = document.createElement("tr");

//  let imagecol = document.createElement("td");
//  imagecol.classList.add("text-center");

//  let image = document.createElement("img");
//  image.src = `${profile_img}`;
//  image.classList.add("rounded-circle");
//  image.id = "table-img";
//  imagecol.appendChild(image);
//  row.appendChild(imagecol);

//  let name = document.createElement("td");
//  name.innerText = `${bidder_id}`;
//  row.appendChild(name);
 
//  let price = document.createElement("td");
//  price.innerText = `₱ ${inputPrice2} /kg`;
//  row.appendChild(price);

//  //const d = new Date();
//  let date = document.createElement("td");

 
//  date.innerText = `${on_time}`;
 
 

//  row.appendChild(date);

//  //tbody1.append(row);
//  //tbody2.append(row);
//  $("tbody").prepend(row);