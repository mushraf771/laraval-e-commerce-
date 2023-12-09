import './bootstrap';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'tw-elements';
import { Datepicker,Sidenav, Input, initTE,  Collapse,Select,
    Dropdown,
   } from "tw-elements";
initTE({ Datepicker, Input,Sidenav ,Collapse, Dropdown,Select});
import 'flowbite';
import $ from 'jquery';
window.$ = $;
window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

// dashboard
document
.getElementById("slim-toggler")
.addEventListener("click", () => {
  const instance = Sidenav.getInstance(
    document.getElementById("sidenav-4")
  );
  instance.toggleSlim();
});

