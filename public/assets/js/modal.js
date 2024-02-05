function removeClassByPrefix(node, prefix) {
  for (let i = 0; i < node.classList.length; i++) {
    let value = node.classList[i];
    if (value.startsWith(prefix)) {
      node.classList.remove(value);
    }
  }
}


var animateModal = document.getElementById('modal');
animateModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget;
  var recipient = button.getAttribute('data-pc-animate');
  animateModal.classList.add('anim-' + recipient);
  if (recipient == 'let-me-in' || recipient == 'make-way' || recipient == 'slip-from-top') {
    document.body.classList.add('anim-' + recipient);
  }
});
animateModal.addEventListener('hidden.bs.modal', function (event) {
  removeClassByPrefix(animateModal, 'anim-');
  removeClassByPrefix(document.body, 'anim-');
});

var animateModal1 = document.getElementById('modal1');
animateModal1.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget;
  var recipient = button.getAttribute('data-pc-animate');
  animateModal1.classList.add('anim-' + recipient);
  if (recipient == 'let-me-in' || recipient == 'make-way' || recipient == 'slip-from-top') {
    document.body.classList.add('anim-' + recipient);
  }
});
animateModal1.addEventListener('hidden.bs.modal', function (event) {
  removeClassByPrefix(animateModal1, 'anim-');
  removeClassByPrefix(document.body, 'anim-');
});
