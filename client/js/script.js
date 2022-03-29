var ready = (callback) => {
  if (document.readyState != "loading") callback();
  else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => { 
  let ePLE = document.head.querySelector("meta[name='x-cms-edit-link']");
  if(ePLE != undefined) {
      const body = document.querySelector('body');
      
      var a = document.createElement('a');
      var lText = document.createTextNode("Edit");
      a.appendChild(lText);
      a.title = "Edit this page in the CMS";
      a.href = ePLE.content;
      a.target="_blank";
      a.id = "cms-edit-link";
      a.classList.add("cms-edit-link");
      document.body.appendChild(a);      
  }
});