import "./bootstrap";
import "./bundle";
import Alpine from "alpinejs";
import.meta.glob(["../images/**", "../fonts/**"]);
window.Alpine = Alpine;
Alpine.start();
