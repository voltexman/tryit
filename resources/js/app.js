import "./bootstrap";
import { initializeCarousel } from "./carousel";

window.initializeCarousel = initializeCarousel;

import.meta.glob(["../images/**", "../fonts/**"], { eager: true });
