import "./bootstrap";

import Alpine from "alpinejs";

import "../css/globals.css";
import "../css/loader.css";
import "../css/container.css";
import "../css/columner.css";
import "../css/navigation.css";
import "../css/alert.css";
import "../css/style.css";

import { Collapse, initTE } from "tw-elements";

initTE({ Collapse });

window.Alpine = Alpine;

Alpine.start();
