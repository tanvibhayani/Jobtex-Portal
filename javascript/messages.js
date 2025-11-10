document.querySelector('.chat[data-chat=person2]').classList.add('active-chat')
document.querySelector('.person[data-chat=person2]').classList.add('active')

let friends = {
    list: document.querySelector('ul.people'),
    all: document.querySelectorAll('.left .person'),
    name: '',
    img: '',
  },
  chat = {
    container: document.querySelector('.content .right'),
    current: null,
    person: null,
    name: document.querySelector('.content .right .top .name'),
    img: document.querySelector('.content .right .top .images')
  }

friends.all.forEach(f => {
  f.addEventListener('mousedown', () => {
    f.classList.contains('active') || setAciveChat(f)
  })
});

function setAciveChat(f) {
  friends.list.querySelector('.active').classList.remove('active')
  f.classList.add('active')
  chat.current = chat.container.querySelector('.active-chat')
  chat.person = f.getAttribute('data-chat')
  chat.current.classList.remove('active-chat')
  chat.container.querySelector('[data-chat="' + chat.person + '"]').classList.add('active-chat')
  friends.name = f.querySelector('.name').innerText
  chat.name.innerHTML = friends.name
  friends.img = f.querySelector('.images').innerHTML
  chat.img.innerHTML = friends.img
}

function newMessage() {
	message = $(".write input").val();
	if($.trim(message) == '') {
		return false;
	}

	$( '<div class="bubble you">' + message + '</div>').appendTo($(' .right .active-chat'));
	$('.write input').val(null);
  // $('<div class="history-time">').appendTo($('.right .chat'));
  
};

$('.icon-send').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});

