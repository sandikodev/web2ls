import { component$ } from "@builder.io/qwik";

export interface IconProps {
    size?: number
    class?: string
}

export const IconFacebook = component$<IconProps>(({ class:localClass="hover:fill-blue-500", size = 18 }) => {
    return (
        <svg class={`${localClass} fill-white`} xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width={size} height={size} viewBox="0,0,255.99609,255.99609">
            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
        </svg>
    );
});

export const IconInstagram = component$<IconProps>(({ class:localClass="hover:fill-blue-400", size = 18 }) => {
    return (
        <svg class={`${localClass} fill-white`} xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width={size} height={size} viewBox="0,0,255.99609,255.99609">
            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,2c-7.168,0 -13,5.832 -13,13c0,7.168 5.832,13 13,13c7.168,0 13,-5.832 13,-13c0,-7.168 -5.832,-13 -13,-13zM11.66602,6h6.66602c3.125,0 5.66797,2.54202 5.66797,5.66602v6.66602c0,3.125 -2.54202,5.66797 -5.66602,5.66797h-6.66602c-3.125,0 -5.66797,-2.54202 -5.66797,-5.66602v-6.66602c0,-3.125 2.54202,-5.66797 5.66602,-5.66797zM11.66602,8c-2.021,0 -3.66602,1.64597 -3.66602,3.66797v6.66602c0,2.021 1.64597,3.66602 3.66797,3.66602h6.66602c2.021,0 3.66602,-1.64597 3.66602,-3.66797v-6.66601c0,-2.021 -1.64597,-3.66602 -3.66797,-3.66602zM19.66797,9.66602c0.368,0 0.66602,0.29802 0.66602,0.66602c0,0.368 -0.29801,0.66797 -0.66602,0.66797c-0.368,0 -0.66797,-0.29997 -0.66797,-0.66797c0,-0.368 0.29997,-0.66602 0.66797,-0.66602zM15,10c2.757,0 5,2.243 5,5c0,2.757 -2.243,5 -5,5c-2.757,0 -5,-2.243 -5,-5c0,-2.757 2.243,-5 5,-5zM15,12c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3z"></path></g></g>
        </svg>
    );
});


export const IconTwitter = component$<IconProps>(({ class:localClass="hover:fill-blue-400", size = 18 }) => {
    return (
        <svg class={`${localClass} fill-white`} xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width={size} height={size} viewBox="0,0,255.99609,255.99609">
            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M6,4c-1.105,0 -2,0.895 -2,2v18c0,1.105 0.895,2 2,2h18c1.105,0 2,-0.895 2,-2v-18c0,-1.105 -0.895,-2 -2,-2zM8.64844,9h4.61133l2.69141,3.84766l3.33008,-3.84766h1.45117l-4.12891,4.78125l5.05078,7.21875h-4.61133l-2.98633,-4.26953l-3.6875,4.26953h-1.47461l4.50586,-5.20508zM10.87891,10.18359l6.75391,9.62695h1.78906l-6.75586,-9.62695z"></path></g></g>
        </svg>
    );
});

export const IconGithub = component$<IconProps>(({ class:localClass="hover:fill-blue-400", size = 18 }) => {
    return (
        <svg class={`${localClass} fill-white`} xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width={size} height={size} viewBox="0,0,255.99609,255.99609">
            <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,5.623 3.872,10.328 9.092,11.63c-0.056,-0.162 -0.092,-0.35 -0.092,-0.583v-2.051c-0.487,0 -1.303,0 -1.508,0c-0.821,0 -1.551,-0.353 -1.905,-1.009c-0.393,-0.729 -0.461,-1.844 -1.435,-2.526c-0.289,-0.227 -0.069,-0.486 0.264,-0.451c0.615,0.174 1.125,0.596 1.605,1.222c0.478,0.627 0.703,0.769 1.596,0.769c0.433,0 1.081,-0.025 1.691,-0.121c0.328,-0.833 0.895,-1.6 1.588,-1.962c-3.996,-0.411 -5.903,-2.399 -5.903,-5.098c0,-1.162 0.495,-2.286 1.336,-3.233c-0.276,-0.94 -0.623,-2.857 0.106,-3.587c1.798,0 2.885,1.166 3.146,1.481c0.896,-0.307 1.88,-0.481 2.914,-0.481c1.036,0 2.024,0.174 2.922,0.483c0.258,-0.313 1.346,-1.483 3.148,-1.483c0.732,0.731 0.381,2.656 0.102,3.594c0.836,0.945 1.328,2.066 1.328,3.226c0,2.697 -1.904,4.684 -5.894,5.097c1.098,0.573 1.899,2.183 1.899,3.396v2.734c0,0.104 -0.023,0.179 -0.035,0.268c4.676,-1.639 8.035,-6.079 8.035,-11.315c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
        </svg>
    );
});
