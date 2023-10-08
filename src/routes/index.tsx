import { component$ } from "@builder.io/qwik";
import type { DocumentHead } from "@builder.io/qwik-city";
import { Meta } from "~/libs/data";
import { IconFacebook, IconGithub, IconInstagram, IconTwitter } from "~/components/icons/IconSocial";

export default component$(() => {
  return (
    <div class="relative min-h-screen flex flex-col" style={{
      background: "url(/wall1.png) no-repeat center center fixed",
      backgroundSize: "cover"
    }}>
      <div id="overlay" style={{
        position: "absolute",
        inset: 0,
        background: "rgba(48, 53, 70, 0.5)",
        boxShadow: "inset 0 0 100px rgba(0, 0, 0, 0.5)"
      }} />
      <div id="content" class="relative flex-1 flex flex-col justify-between">
        <header class="container mx-auto py-5">
          <div class="mx-4 flex flex-col items-center sm:flex-row sm:justify-between">
            <div id="title" class="text-white text-2xl">{Meta.title}</div>
            <ul class="gap-2 inline-flex items-center">
              <li>
                <a href="https://www.facebook.com/kopikonfig">
                  <IconFacebook/>
                </a>
              </li>
              <li>
                <a href="https://www.twitter.com/kopikonfig">
                  <IconTwitter />
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/kopikonfig">
                  <IconInstagram />
                </a>
              </li>
              <li>
                <a href="https://www.github.com/kopikonfig.id">
                  <IconGithub />
                </a>
              </li>
            </ul>
          </div>
        </header>
        <main class="text-white text-center">
          <div>
            <h1 class="my-8 text-3xl tracking-widest">FUTURE GUNDULMU</h1>
          </div>
          <div class="my-4">
            <p class="font-light">simple portal</p>
          </div>
          <div class="my-2">
            <button class="rounded-full border-solid border-2 border-white py-1 px-10 uppercase">check app</button>
          </div>
        </main>
        <footer class="p-4">
          <div class="bg-blue-200 p-4 rounded-lg">
            <p class="text-blue-600 px-2 text-center">
              experiment site. for fu*king tools. hope u enjoy it! make with f*cking love - whatever you name it.
            </p>
          </div>
        </footer>
      </div>
    </div>
  );
});

export const head: DocumentHead = {
  title: "Web2ls",
  meta: [
    {
      name: "description",
      content: "Many Tools You CAN Get!",
    },
  ],
};
