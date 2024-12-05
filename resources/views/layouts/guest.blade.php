<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#DDE8FF] ">
        <div class="bg-white py-14 px-16 rounded">
            <div class="mb-4">
                <a href="/">
                    <svg width="358" height="41" viewBox="0 0 358 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.9766 39.1562C23.9766 39.3125 23.9219 39.4531 23.8125 39.5781C23.7188 39.7031 23.5547 39.8047 23.3203 39.8828C23.0859 39.9609 22.7734 40.0234 22.3828 40.0703C21.9922 40.1172 21.5 40.1406 20.9062 40.1406C20.2969 40.1406 19.7891 40.1172 19.3828 40.0703C18.9922 40.0234 18.6797 39.9609 18.4453 39.8828C18.2266 39.8047 18.0625 39.7031 17.9531 39.5781C17.8594 39.4531 17.8125 39.3125 17.8125 39.1562V26.8984H6.46875V39.1562C6.46875 39.3125 6.42188 39.4531 6.32812 39.5781C6.23438 39.7031 6.07031 39.8047 5.83594 39.8828C5.60156 39.9609 5.28906 40.0234 4.89844 40.0703C4.50781 40.1172 4.00781 40.1406 3.39844 40.1406C2.80469 40.1406 2.30469 40.1172 1.89844 40.0703C1.50781 40.0234 1.19531 39.9609 0.960938 39.8828C0.726562 39.8047 0.554688 39.7031 0.445312 39.5781C0.351562 39.4531 0.304688 39.3125 0.304688 39.1562V10.5156C0.304688 10.3594 0.351562 10.2187 0.445312 10.0938C0.554688 9.96875 0.726562 9.86719 0.960938 9.78906C1.19531 9.71094 1.50781 9.64844 1.89844 9.60156C2.30469 9.55469 2.80469 9.53125 3.39844 9.53125C4.00781 9.53125 4.50781 9.55469 4.89844 9.60156C5.28906 9.64844 5.60156 9.71094 5.83594 9.78906C6.07031 9.86719 6.23438 9.96875 6.32812 10.0938C6.42188 10.2187 6.46875 10.3594 6.46875 10.5156V21.6484H17.8125V10.5156C17.8125 10.3594 17.8594 10.2187 17.9531 10.0938C18.0625 9.96875 18.2266 9.86719 18.4453 9.78906C18.6797 9.71094 18.9922 9.64844 19.3828 9.60156C19.7891 9.55469 20.2969 9.53125 20.9062 9.53125C21.5 9.53125 21.9922 9.55469 22.3828 9.60156C22.7734 9.64844 23.0859 9.71094 23.3203 9.78906C23.5547 9.86719 23.7188 9.96875 23.8125 10.0938C23.9219 10.2187 23.9766 10.3594 23.9766 10.5156V39.1562ZM55.4297 37.7031C55.6172 38.2656 55.7344 38.7109 55.7812 39.0391C55.8281 39.3672 55.7656 39.6172 55.5938 39.7891C55.4219 39.9453 55.1172 40.0391 54.6797 40.0703C54.2422 40.1172 53.6406 40.1406 52.875 40.1406C52.0781 40.1406 51.4531 40.125 51 40.0938C50.5625 40.0781 50.2266 40.0391 49.9922 39.9766C49.7578 39.8984 49.5938 39.7969 49.5 39.6719C49.4062 39.5469 49.3281 39.3828 49.2656 39.1797L47.2266 33.0859H35.8359L33.9141 39.0156C33.8516 39.2344 33.7656 39.4219 33.6562 39.5781C33.5625 39.7188 33.3984 39.8359 33.1641 39.9297C32.9453 40.0078 32.625 40.0625 32.2031 40.0938C31.7969 40.125 31.2578 40.1406 30.5859 40.1406C29.8672 40.1406 29.3047 40.1172 28.8984 40.0703C28.4922 40.0234 28.2109 39.9141 28.0547 39.7422C27.8984 39.5547 27.8438 39.2969 27.8906 38.9688C27.9375 38.6406 28.0547 38.2031 28.2422 37.6562L37.5938 10.75C37.6875 10.4844 37.7969 10.2734 37.9219 10.1172C38.0469 9.94531 38.2422 9.82031 38.5078 9.74219C38.7891 9.64844 39.1719 9.59375 39.6562 9.57812C40.1406 9.54688 40.7812 9.53125 41.5781 9.53125C42.5 9.53125 43.2344 9.54688 43.7812 9.57812C44.3281 9.59375 44.75 9.64844 45.0469 9.74219C45.3594 9.82031 45.5781 9.94531 45.7031 10.1172C45.8438 10.2891 45.9609 10.5234 46.0547 10.8203L55.4297 37.7031ZM41.5078 15.4609H41.4844L37.1953 28.3516H45.7969L41.5078 15.4609ZM80.4609 18.8828C80.4609 20.5859 80.1953 22.0938 79.6641 23.4062C79.1328 24.7188 78.3594 25.8281 77.3438 26.7344C76.3281 27.625 75.0781 28.3047 73.5938 28.7734C72.125 29.2422 70.3906 29.4766 68.3906 29.4766H65.8594V39.1562C65.8594 39.3125 65.8047 39.4531 65.6953 39.5781C65.6016 39.7031 65.4375 39.8047 65.2031 39.8828C64.9688 39.9609 64.6562 40.0234 64.2656 40.0703C63.875 40.1172 63.375 40.1406 62.7656 40.1406C62.1719 40.1406 61.6719 40.1172 61.2656 40.0703C60.875 40.0234 60.5625 39.9609 60.3281 39.8828C60.0938 39.8047 59.9297 39.7031 59.8359 39.5781C59.7422 39.4531 59.6953 39.3125 59.6953 39.1562V11.875C59.6953 11.1406 59.8828 10.5937 60.2578 10.2344C60.6484 9.85938 61.1562 9.67188 61.7812 9.67188H68.9297C69.6484 9.67188 70.3281 9.70312 70.9688 9.76562C71.625 9.8125 72.4062 9.92969 73.3125 10.1172C74.2188 10.2891 75.1328 10.6172 76.0547 11.1016C76.9922 11.5859 77.7891 12.2031 78.4453 12.9531C79.1016 13.6875 79.6016 14.5547 79.9453 15.5547C80.2891 16.5391 80.4609 17.6484 80.4609 18.8828ZM74.0156 19.3281C74.0156 18.2656 73.8281 17.3906 73.4531 16.7031C73.0781 16.0156 72.6172 15.5078 72.0703 15.1797C71.5234 14.8516 70.9453 14.6484 70.3359 14.5703C69.7422 14.4766 69.125 14.4297 68.4844 14.4297H65.8594V24.7188H68.625C69.6094 24.7188 70.4297 24.5859 71.0859 24.3203C71.7578 24.0547 72.3047 23.6875 72.7266 23.2188C73.1484 22.7344 73.4688 22.1641 73.6875 21.5078C73.9062 20.8359 74.0156 20.1094 74.0156 19.3281ZM99.375 31.6328C98.6875 33.3828 98.0078 34.8281 97.3359 35.9688C96.6797 37.1094 95.9688 38.0156 95.2031 38.6875C94.4531 39.3438 93.625 39.7969 92.7188 40.0469C91.8281 40.3125 90.8047 40.4453 89.6484 40.4453C89.2266 40.4453 88.8125 40.4141 88.4062 40.3516C88 40.3047 87.6172 40.2344 87.2578 40.1406C86.8984 40.0469 86.5859 39.9375 86.3203 39.8125C86.0547 39.6875 85.8594 39.5703 85.7344 39.4609C85.6094 39.3516 85.5078 39.2344 85.4297 39.1094C85.3672 38.9688 85.3125 38.7891 85.2656 38.5703C85.2188 38.3516 85.1797 38.0781 85.1484 37.75C85.1328 37.4062 85.125 36.9844 85.125 36.4844C85.125 35.5781 85.1875 34.9375 85.3125 34.5625C85.4531 34.1719 85.6641 33.9766 85.9453 33.9766C86.0859 33.9766 86.2422 34.0312 86.4141 34.1406C86.5859 34.25 86.7891 34.3672 87.0234 34.4922C87.2734 34.6172 87.5547 34.7344 87.8672 34.8438C88.1953 34.9375 88.5781 34.9844 89.0156 34.9844C89.3438 34.9844 89.6484 34.9531 89.9297 34.8906C90.2109 34.8125 90.4766 34.6719 90.7266 34.4688C90.9766 34.2656 91.2266 33.9844 91.4766 33.625C91.7266 33.25 91.9922 32.7656 92.2734 32.1719L82.2891 11.8516C82.0703 11.3672 81.9375 10.9766 81.8906 10.6797C81.8594 10.3672 81.9375 10.125 82.125 9.95312C82.3125 9.78125 82.625 9.67188 83.0625 9.625C83.5156 9.5625 84.1172 9.53125 84.8672 9.53125C85.6016 9.53125 86.1875 9.54688 86.625 9.57812C87.0625 9.60937 87.4141 9.67969 87.6797 9.78906C87.9453 9.88281 88.1484 10.0312 88.2891 10.2344C88.4297 10.4219 88.5703 10.6719 88.7109 10.9844L92.9766 20.1719C93.4453 21.1562 93.8906 22.1406 94.3125 23.125C94.7344 24.0938 95.1406 25.0781 95.5312 26.0781H95.6016C95.9141 25.0312 96.2422 24.0156 96.5859 23.0312C96.9453 22.0312 97.3359 20.9844 97.7578 19.8906L101.25 10.5625C101.328 10.3438 101.43 10.1719 101.555 10.0469C101.68 9.90625 101.867 9.79687 102.117 9.71875C102.367 9.64063 102.711 9.59375 103.148 9.57812C103.586 9.54688 104.156 9.53125 104.859 9.53125C105.578 9.53125 106.148 9.55469 106.57 9.60156C106.992 9.64844 107.297 9.74219 107.484 9.88281C107.672 10.0078 107.758 10.1875 107.742 10.4219C107.727 10.6562 107.648 10.9609 107.508 11.3359L99.375 31.6328ZM147.703 38.0547C147.703 38.7109 147.547 39.2031 147.234 39.5312C146.922 39.8438 146.484 40 145.922 40H113.086C112.539 40 112.094 39.8438 111.75 39.5312C111.422 39.2031 111.258 38.7109 111.258 38.0547V10.4219C111.258 10.2656 111.305 10.1328 111.398 10.0234C111.508 9.91406 111.68 9.82813 111.914 9.76562C112.148 9.6875 112.461 9.63281 112.852 9.60156C113.242 9.55469 113.719 9.53125 114.281 9.53125C114.859 9.53125 115.336 9.55469 115.711 9.60156C116.102 9.63281 116.414 9.6875 116.648 9.76562C116.883 9.82813 117.047 9.91406 117.141 10.0234C117.25 10.1328 117.305 10.2656 117.305 10.4219V34.9844H126.469V10.4219C126.469 10.2656 126.516 10.1328 126.609 10.0234C126.719 9.91406 126.883 9.82813 127.102 9.76562C127.336 9.6875 127.648 9.63281 128.039 9.60156C128.43 9.55469 128.906 9.53125 129.469 9.53125C130.031 9.53125 130.5 9.55469 130.875 9.60156C131.266 9.63281 131.578 9.6875 131.812 9.76562C132.047 9.82813 132.211 9.91406 132.305 10.0234C132.414 10.1328 132.469 10.2656 132.469 10.4219V34.9844H141.656V10.4219C141.656 10.2656 141.703 10.1328 141.797 10.0234C141.906 9.91406 142.078 9.82813 142.312 9.76562C142.547 9.6875 142.852 9.63281 143.227 9.60156C143.617 9.55469 144.102 9.53125 144.68 9.53125C145.242 9.53125 145.711 9.55469 146.086 9.60156C146.477 9.63281 146.789 9.6875 147.023 9.76562C147.258 9.82813 147.43 9.91406 147.539 10.0234C147.648 10.1328 147.703 10.2656 147.703 10.4219V38.0547ZM172.312 37.5859C172.312 38.0391 172.289 38.4219 172.242 38.7344C172.211 39.0312 172.156 39.2734 172.078 39.4609C172 39.6484 171.898 39.7891 171.773 39.8828C171.664 39.9609 171.539 40 171.398 40H156.164C155.648 40 155.211 39.8516 154.852 39.5547C154.508 39.2422 154.336 38.7422 154.336 38.0547V11.6172C154.336 10.9297 154.508 10.4375 154.852 10.1406C155.211 9.82813 155.648 9.67188 156.164 9.67188H171.305C171.445 9.67188 171.57 9.71094 171.68 9.78906C171.789 9.86719 171.883 10.0078 171.961 10.2109C172.039 10.3984 172.094 10.6484 172.125 10.9609C172.172 11.2578 172.195 11.6406 172.195 12.1094C172.195 12.5469 172.172 12.9219 172.125 13.2344C172.094 13.5313 172.039 13.7734 171.961 13.9609C171.883 14.1484 171.789 14.2891 171.68 14.3828C171.57 14.4609 171.445 14.5 171.305 14.5H160.477V21.9062H169.641C169.781 21.9062 169.906 21.9531 170.016 22.0469C170.141 22.125 170.242 22.2578 170.32 22.4453C170.398 22.6172 170.453 22.8594 170.484 23.1719C170.531 23.4688 170.555 23.8359 170.555 24.2734C170.555 24.7266 170.531 25.1016 170.484 25.3984C170.453 25.6953 170.398 25.9375 170.32 26.125C170.242 26.2969 170.141 26.4219 170.016 26.5C169.906 26.5781 169.781 26.6172 169.641 26.6172H160.477V35.1719H171.398C171.539 35.1719 171.664 35.2188 171.773 35.3125C171.898 35.3906 172 35.5234 172.078 35.7109C172.156 35.8984 172.211 36.1484 172.242 36.4609C172.289 36.7578 172.312 37.1328 172.312 37.5859ZM201.445 39.1562C201.445 39.3125 201.391 39.4531 201.281 39.5781C201.188 39.7031 201.023 39.8047 200.789 39.8828C200.555 39.9609 200.242 40.0234 199.852 40.0703C199.461 40.1172 198.969 40.1406 198.375 40.1406C197.766 40.1406 197.258 40.1172 196.852 40.0703C196.461 40.0234 196.148 39.9609 195.914 39.8828C195.695 39.8047 195.531 39.7031 195.422 39.5781C195.328 39.4531 195.281 39.3125 195.281 39.1562V26.8984H183.938V39.1562C183.938 39.3125 183.891 39.4531 183.797 39.5781C183.703 39.7031 183.539 39.8047 183.305 39.8828C183.07 39.9609 182.758 40.0234 182.367 40.0703C181.977 40.1172 181.477 40.1406 180.867 40.1406C180.273 40.1406 179.773 40.1172 179.367 40.0703C178.977 40.0234 178.664 39.9609 178.43 39.8828C178.195 39.8047 178.023 39.7031 177.914 39.5781C177.82 39.4531 177.773 39.3125 177.773 39.1562V10.5156C177.773 10.3594 177.82 10.2187 177.914 10.0938C178.023 9.96875 178.195 9.86719 178.43 9.78906C178.664 9.71094 178.977 9.64844 179.367 9.60156C179.773 9.55469 180.273 9.53125 180.867 9.53125C181.477 9.53125 181.977 9.55469 182.367 9.60156C182.758 9.64844 183.07 9.71094 183.305 9.78906C183.539 9.86719 183.703 9.96875 183.797 10.0938C183.891 10.2187 183.938 10.3594 183.938 10.5156V21.6484H195.281V10.5156C195.281 10.3594 195.328 10.2187 195.422 10.0938C195.531 9.96875 195.695 9.86719 195.914 9.78906C196.148 9.71094 196.461 9.64844 196.852 9.60156C197.258 9.55469 197.766 9.53125 198.375 9.53125C198.969 9.53125 199.461 9.55469 199.852 9.60156C200.242 9.64844 200.555 9.71094 200.789 9.78906C201.023 9.86719 201.188 9.96875 201.281 10.0938C201.391 10.2187 201.445 10.3594 201.445 10.5156V39.1562ZM232.734 39.2031C232.734 39.3594 232.68 39.5 232.57 39.625C232.477 39.7344 232.312 39.8281 232.078 39.9062C231.844 39.9844 231.523 40.0391 231.117 40.0703C230.727 40.1172 230.234 40.1406 229.641 40.1406C229.047 40.1406 228.547 40.1172 228.141 40.0703C227.75 40.0391 227.438 39.9844 227.203 39.9062C226.984 39.8281 226.828 39.7344 226.734 39.625C226.641 39.5 226.594 39.3594 226.594 39.2031V23.2188C226.594 22.6094 226.602 22.0156 226.617 21.4375C226.633 20.8438 226.656 20.3203 226.688 19.8672H226.641C226.516 20.0859 226.367 20.3438 226.195 20.6406C226.023 20.9219 225.836 21.2266 225.633 21.5547C225.445 21.8672 225.242 22.1953 225.023 22.5391C224.805 22.8672 224.586 23.1875 224.367 23.5L213.82 39.2266C213.695 39.3984 213.562 39.5469 213.422 39.6719C213.297 39.7969 213.125 39.8984 212.906 39.9766C212.703 40.0391 212.445 40.0781 212.133 40.0938C211.836 40.125 211.445 40.1406 210.961 40.1406C210.352 40.1406 209.859 40.1172 209.484 40.0703C209.109 40.0391 208.812 39.9844 208.594 39.9062C208.391 39.8281 208.25 39.7266 208.172 39.6016C208.094 39.4766 208.055 39.3281 208.055 39.1562V10.4688C208.055 10.3125 208.102 10.1797 208.195 10.0703C208.305 9.94531 208.477 9.84375 208.711 9.76562C208.961 9.6875 209.281 9.63281 209.672 9.60156C210.062 9.55469 210.555 9.53125 211.148 9.53125C211.758 9.53125 212.258 9.55469 212.648 9.60156C213.039 9.63281 213.352 9.6875 213.586 9.76562C213.82 9.84375 213.984 9.94531 214.078 10.0703C214.172 10.1797 214.219 10.3125 214.219 10.4688V26.5469C214.219 27.0469 214.211 27.5781 214.195 28.1406C214.18 28.7031 214.156 29.25 214.125 29.7812H214.172C214.438 29.3125 214.773 28.75 215.18 28.0938C215.586 27.4375 216.008 26.7969 216.445 26.1719L226.992 10.4453C227.102 10.2891 227.219 10.1563 227.344 10.0469C227.469 9.92188 227.633 9.82031 227.836 9.74219C228.055 9.66406 228.32 9.60937 228.633 9.57812C228.945 9.54688 229.344 9.53125 229.828 9.53125C230.422 9.53125 230.898 9.55469 231.258 9.60156C231.633 9.63281 231.93 9.6875 232.148 9.76562C232.367 9.84375 232.516 9.94531 232.594 10.0703C232.688 10.1797 232.734 10.3203 232.734 10.4922V39.2031ZM264.047 39.2031C264.047 39.3594 263.992 39.5 263.883 39.625C263.789 39.7344 263.625 39.8281 263.391 39.9062C263.156 39.9844 262.836 40.0391 262.43 40.0703C262.039 40.1172 261.547 40.1406 260.953 40.1406C260.359 40.1406 259.859 40.1172 259.453 40.0703C259.062 40.0391 258.75 39.9844 258.516 39.9062C258.297 39.8281 258.141 39.7344 258.047 39.625C257.953 39.5 257.906 39.3594 257.906 39.2031V23.2188C257.906 22.6094 257.914 22.0156 257.93 21.4375C257.945 20.8438 257.969 20.3203 258 19.8672H257.953C257.828 20.0859 257.68 20.3438 257.508 20.6406C257.336 20.9219 257.148 21.2266 256.945 21.5547C256.758 21.8672 256.555 22.1953 256.336 22.5391C256.117 22.8672 255.898 23.1875 255.68 23.5L245.133 39.2266C245.008 39.3984 244.875 39.5469 244.734 39.6719C244.609 39.7969 244.438 39.8984 244.219 39.9766C244.016 40.0391 243.758 40.0781 243.445 40.0938C243.148 40.125 242.758 40.1406 242.273 40.1406C241.664 40.1406 241.172 40.1172 240.797 40.0703C240.422 40.0391 240.125 39.9844 239.906 39.9062C239.703 39.8281 239.562 39.7266 239.484 39.6016C239.406 39.4766 239.367 39.3281 239.367 39.1562V10.4688C239.367 10.3125 239.414 10.1797 239.508 10.0703C239.617 9.94531 239.789 9.84375 240.023 9.76562C240.273 9.6875 240.594 9.63281 240.984 9.60156C241.375 9.55469 241.867 9.53125 242.461 9.53125C243.07 9.53125 243.57 9.55469 243.961 9.60156C244.352 9.63281 244.664 9.6875 244.898 9.76562C245.133 9.84375 245.297 9.94531 245.391 10.0703C245.484 10.1797 245.531 10.3125 245.531 10.4688V26.5469C245.531 27.0469 245.523 27.5781 245.508 28.1406C245.492 28.7031 245.469 29.25 245.438 29.7812H245.484C245.75 29.3125 246.086 28.75 246.492 28.0938C246.898 27.4375 247.32 26.7969 247.758 26.1719L258.305 10.4453C258.414 10.2891 258.531 10.1563 258.656 10.0469C258.781 9.92188 258.945 9.82031 259.148 9.74219C259.367 9.66406 259.633 9.60937 259.945 9.57812C260.258 9.54688 260.656 9.53125 261.141 9.53125C261.734 9.53125 262.211 9.55469 262.57 9.60156C262.945 9.63281 263.242 9.6875 263.461 9.76562C263.68 9.84375 263.828 9.94531 263.906 10.0703C264 10.1797 264.047 10.3203 264.047 10.4922V39.2031ZM260.461 1.53906C260.461 2.39844 260.312 3.22656 260.016 4.02344C259.719 4.80469 259.234 5.5 258.562 6.10938C257.906 6.70312 257.031 7.17969 255.938 7.53906C254.859 7.89844 253.531 8.07812 251.953 8.07812C250.422 8.07812 249.117 7.91406 248.039 7.58594C246.961 7.25781 246.078 6.8125 245.391 6.25C244.719 5.67187 244.227 4.98438 243.914 4.1875C243.602 3.375 243.445 2.49219 243.445 1.53906C243.445 1.30469 243.484 1.11719 243.562 0.976562C243.656 0.820312 243.805 0.695312 244.008 0.601562C244.211 0.507812 244.484 0.445312 244.828 0.414062C245.188 0.367188 245.633 0.34375 246.164 0.34375C246.664 0.34375 247.078 0.367188 247.406 0.414062C247.734 0.460938 247.984 0.53125 248.156 0.625C248.328 0.71875 248.445 0.84375 248.508 1C248.586 1.14062 248.625 1.3125 248.625 1.51562C248.625 1.89062 248.695 2.24219 248.836 2.57031C248.992 2.89844 249.211 3.1875 249.492 3.4375C249.789 3.67188 250.148 3.86719 250.57 4.02344C250.992 4.17969 251.461 4.25781 251.977 4.25781C252.477 4.25781 252.93 4.1875 253.336 4.04688C253.742 3.89062 254.086 3.69531 254.367 3.46094C254.664 3.21094 254.883 2.92188 255.023 2.59375C255.18 2.25 255.258 1.875 255.258 1.46875C255.258 1.28125 255.289 1.11719 255.352 0.976562C255.414 0.835938 255.531 0.71875 255.703 0.625C255.891 0.53125 256.133 0.460938 256.43 0.414062C256.742 0.367188 257.133 0.34375 257.602 0.34375C258.164 0.34375 258.625 0.367188 258.984 0.414062C259.359 0.445312 259.656 0.507812 259.875 0.601562C260.094 0.695312 260.242 0.820312 260.32 0.976562C260.414 1.11719 260.461 1.30469 260.461 1.53906Z" fill="#051AFF"/>
                        <path d="M277.266 36.625C277.266 38.0781 277.008 39.0547 276.492 39.5547C275.992 40.0547 275.086 40.3047 273.773 40.3047C272.461 40.3047 271.555 40.0625 271.055 39.5781C270.555 39.0781 270.305 38.1406 270.305 36.7656C270.305 35.2969 270.555 34.3125 271.055 33.8125C271.57 33.3125 272.492 33.0625 273.82 33.0625C275.117 33.0625 276.016 33.3125 276.516 33.8125C277.016 34.2969 277.266 35.2344 277.266 36.625ZM307.195 39.1562C307.195 39.3125 307.141 39.4531 307.031 39.5781C306.938 39.7031 306.773 39.8047 306.539 39.8828C306.305 39.9609 305.992 40.0234 305.602 40.0703C305.211 40.1172 304.719 40.1406 304.125 40.1406C303.516 40.1406 303.008 40.1172 302.602 40.0703C302.211 40.0234 301.898 39.9609 301.664 39.8828C301.445 39.8047 301.281 39.7031 301.172 39.5781C301.078 39.4531 301.031 39.3125 301.031 39.1562V26.8984H289.688V39.1562C289.688 39.3125 289.641 39.4531 289.547 39.5781C289.453 39.7031 289.289 39.8047 289.055 39.8828C288.82 39.9609 288.508 40.0234 288.117 40.0703C287.727 40.1172 287.227 40.1406 286.617 40.1406C286.023 40.1406 285.523 40.1172 285.117 40.0703C284.727 40.0234 284.414 39.9609 284.18 39.8828C283.945 39.8047 283.773 39.7031 283.664 39.5781C283.57 39.4531 283.523 39.3125 283.523 39.1562V10.5156C283.523 10.3594 283.57 10.2187 283.664 10.0938C283.773 9.96875 283.945 9.86719 284.18 9.78906C284.414 9.71094 284.727 9.64844 285.117 9.60156C285.523 9.55469 286.023 9.53125 286.617 9.53125C287.227 9.53125 287.727 9.55469 288.117 9.60156C288.508 9.64844 288.82 9.71094 289.055 9.78906C289.289 9.86719 289.453 9.96875 289.547 10.0938C289.641 10.2187 289.688 10.3594 289.688 10.5156V21.6484H301.031V10.5156C301.031 10.3594 301.078 10.2187 301.172 10.0938C301.281 9.96875 301.445 9.86719 301.664 9.78906C301.898 9.71094 302.211 9.64844 302.602 9.60156C303.008 9.55469 303.516 9.53125 304.125 9.53125C304.719 9.53125 305.211 9.55469 305.602 9.60156C305.992 9.64844 306.305 9.71094 306.539 9.78906C306.773 9.86719 306.938 9.96875 307.031 10.0938C307.141 10.2187 307.195 10.3594 307.195 10.5156V39.1562ZM331.781 37.5859C331.781 38.0391 331.758 38.4219 331.711 38.7344C331.68 39.0312 331.625 39.2734 331.547 39.4609C331.469 39.6484 331.367 39.7891 331.242 39.8828C331.133 39.9609 331.008 40 330.867 40H315.633C315.117 40 314.68 39.8516 314.32 39.5547C313.977 39.2422 313.805 38.7422 313.805 38.0547V11.6172C313.805 10.9297 313.977 10.4375 314.32 10.1406C314.68 9.82813 315.117 9.67188 315.633 9.67188H330.773C330.914 9.67188 331.039 9.71094 331.148 9.78906C331.258 9.86719 331.352 10.0078 331.43 10.2109C331.508 10.3984 331.562 10.6484 331.594 10.9609C331.641 11.2578 331.664 11.6406 331.664 12.1094C331.664 12.5469 331.641 12.9219 331.594 13.2344C331.562 13.5313 331.508 13.7734 331.43 13.9609C331.352 14.1484 331.258 14.2891 331.148 14.3828C331.039 14.4609 330.914 14.5 330.773 14.5H319.945V21.9062H329.109C329.25 21.9062 329.375 21.9531 329.484 22.0469C329.609 22.125 329.711 22.2578 329.789 22.4453C329.867 22.6172 329.922 22.8594 329.953 23.1719C330 23.4688 330.023 23.8359 330.023 24.2734C330.023 24.7266 330 25.1016 329.953 25.3984C329.922 25.6953 329.867 25.9375 329.789 26.125C329.711 26.2969 329.609 26.4219 329.484 26.5C329.375 26.5781 329.25 26.6172 329.109 26.6172H319.945V35.1719H330.867C331.008 35.1719 331.133 35.2188 331.242 35.3125C331.367 35.3906 331.469 35.5234 331.547 35.7109C331.625 35.8984 331.68 36.1484 331.711 36.4609C331.758 36.7578 331.781 37.1328 331.781 37.5859ZM357.234 12.2031C357.234 12.6562 357.211 13.0469 357.164 13.375C357.133 13.6875 357.078 13.9453 357 14.1484C356.922 14.3359 356.82 14.4766 356.695 14.5703C356.586 14.6641 356.461 14.7109 356.32 14.7109H348.727V39.1562C348.727 39.3125 348.672 39.4531 348.562 39.5781C348.469 39.7031 348.305 39.8047 348.07 39.8828C347.836 39.9609 347.516 40.0234 347.109 40.0703C346.719 40.1172 346.227 40.1406 345.633 40.1406C345.039 40.1406 344.539 40.1172 344.133 40.0703C343.742 40.0234 343.43 39.9609 343.195 39.8828C342.961 39.8047 342.789 39.7031 342.68 39.5781C342.586 39.4531 342.539 39.3125 342.539 39.1562V14.7109H334.945C334.789 14.7109 334.656 14.6641 334.547 14.5703C334.438 14.4766 334.344 14.3359 334.266 14.1484C334.188 13.9453 334.125 13.6875 334.078 13.375C334.047 13.0469 334.031 12.6562 334.031 12.2031C334.031 11.7344 334.047 11.3359 334.078 11.0078C334.125 10.6797 334.188 10.4219 334.266 10.2344C334.344 10.0312 334.438 9.89062 334.547 9.8125C334.656 9.71875 334.789 9.67188 334.945 9.67188H356.32C356.461 9.67188 356.586 9.71875 356.695 9.8125C356.82 9.89062 356.922 10.0312 357 10.2344C357.078 10.4219 357.133 10.6797 357.164 11.0078C357.211 11.3359 357.234 11.7344 357.234 12.2031Z" fill="#FF0000"/>
                    </svg>
                </a>
            </div>

            <div class="">
                {{ $slot }}
            </div>
        </div>
    </div>
    </body>
</html>
