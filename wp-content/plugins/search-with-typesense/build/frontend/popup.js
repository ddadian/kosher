(()=>{"use strict";document.addEventListener("DOMContentLoaded",(()=>{(()=>{let e=document.querySelector(".cmswt-InstantSearchPopup"),t=!1;const c=()=>{e.classList.add("cmswt-InstantSearchPopup--active"),e.querySelector(".ais-SearchBox-input").focus(),t=!0},n=()=>{t=!1,e.classList.remove("cmswt-InstantSearchPopup--active")};let r=document.querySelectorAll(".cm-swt-instant-search-popup--trigger");r.length>0&&r.forEach((e=>{null!==e&&e.addEventListener("click",(e=>{e.preventDefault(),c()}))}));let a=document.querySelectorAll(".wp-block-search");a.length>0&&a.forEach((e=>{let t=e.querySelector(".wp-block-search__input");e.addEventListener("click",(e=>{e.preventDefault(),c()})),t.addEventListener("click",(e=>{c()}))}));let l=document.querySelectorAll(".search-form");l.length>0&&l.forEach((e=>{e.addEventListener("click",(e=>{e.preventDefault(),c()}))})),null!==e&&(window.addEventListener("message",(e=>{e.data?.cmswtOpenSearch?c():!1===e.data?.cmswtOpenSearch&&n()})),document.addEventListener("keydown",(e=>{"keydown"===e.type&&27===e.keyCode&&t&&n()})),e.addEventListener("click",(c=>{c.target===e&&t&&n()})),document.querySelector(".cmswt-InstantSearchPopup--closeIcon").addEventListener("click",(e=>{e.preventDefault(),t&&n()})))})()}))})();