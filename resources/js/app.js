import './bootstrap';

import 'flowbite';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard';



import Swiper from "swiper/bundle";


window.Swiper = Swiper;

Alpine.plugin(Clipboard)

Livewire.start()



