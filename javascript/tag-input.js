const tagInput = document.querySelector("ul .tag-input ");
const tagArea = document.querySelector(".tag-area");
const ul = document.querySelector(".tag-area ul");
const label = document.querySelector(".label");

let tags = ["Developer", "Graphic Designer", "VFX Artist"];

function addEvent(element) {
  tagArea.addEventListener("click", () => {
    element.focus();
  });

  element.addEventListener("keydown", (e) => {
    console.log(e);
    const value = e.target.value;
    if (
      (e.keyCode === 32 ||
        e.keyCode === 13 ||
        value[value.length - 1] === " ") &&
      !value.match(/^\s+$/gi) &&
      value !== ""
    ) {
      tags.push(e.target.value.trim());
      element.value = "";
      renderTags();
    }
    if (e.keyCode === 8 && value === "") {
      tags.pop();
      renderTags();
    }
  });
}
renderTags();
addEvent(tagInput);

function renderTags() {
  ul.innerHTML = "";
  tags.forEach((tag, index) => {
    createTag(tag, index);
  });
  const input = document.createElement("input");
  input.type = "text";
  input.className = "tag-input";
  addEvent(input);
  ul.appendChild(input);
  setTimeout(() => (input.value = ""), 0);
}

function createTag(tag, index) {
  const li = document.createElement("li");
  li.className = "tag";
  const text = document.createTextNode(tag);
  const span = document.createElement("span");
  span.className = "cross";
  span.dataset.index = index;
  span.addEventListener("click", (e) => {
    tags = tags.filter((_, index) => index != e.target.dataset.index);
    renderTags();
  });
  li.appendChild(text);
  li.appendChild(span);
  ul.appendChild(li);
}
