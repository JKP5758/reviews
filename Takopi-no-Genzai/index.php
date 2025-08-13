<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takopi no Genzai</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <section
        class="relative w-full h-screen flex flex-col border-4 border-red-500 md:px-16 pb-4 bg-cover bg-center"
        style="background-image: url('../assets/img/Takopi-no-Genzai/bg.jpg');">

        <!-- Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-pink-400 via-black/40 to-transparent"></div>

        <!-- TOP (70%) -->
        <div class="relative h-2/3 border-4 border-green-500 flex items-end md:p-4 z-10">
            <div class="border-4 border-blue-500 p-2 flex flex-col text-white">
                <!-- Judul Jepang (besar) -->
                <h1 class="md:text-5xl text-4xl font-bold border border-red-500 p-2">
                    タコピーの原罪
                </h1>
                <!-- Judul Latin (kecil) -->
                <h2 class="text-xl font-semibold border border-purple-500 p-2">
                    Takopii no Genzai
                </h2>
                <!-- Info -->
                <p class="text-sm text-gray-200 border border-yellow-500 p-2">
                    2025 | 17+ | 2h 15m | Bahasa Jepang
                </p>
            </div>
        </div>

        <!-- BOTTOM (30%) -->
        <div class="relative h-1/3 w-full md:flex-row flex-col border-4 border-purple-500 flex z-10 text-white">

            <!-- Ilustrasi (Desktop only) -->
            <div class="border-4 border-yellow-500 px-4 flex items-center justify-center h-full max-lg:hidden">
                <div class="border-4 border-pink-500 h-full aspect-[2/3]">
                    <img src="../assets/img/Takopi-no-Genzai/cover.jpg"
                        alt="Ilustrasi"
                        class="w-full h-full object-cover" />
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="flex-1 border-4 border-green-500 flex flex-col p-4">
                <!-- Penulis -->
                <div class="border border-red-500 font-bold p-2">
                    Ditulis oleh: John Doe
                </div>
                <!-- Sinopsis -->
                <div class="flex-1 border border-blue-500 p-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet facilisis urna. Praesent ac magna justo. Sed imperdiet, sapien nec aliquet sagittis, purus dui tincidunt arcu.
                </div>
                <!-- Genre -->
                <div class="border border-orange-500 p-2">
                    Drama | Fantasy | Romance
                </div>
            </div>

            <!-- Score (Desktop only) -->
            <div class="border-4 border-indigo-500 flex items-center justify-center aspect-square max-lg:hidden">
                Score
            </div>

        </div>

    </section>

    <!-- Poster & Score untuk Mobile -->
    <div class="lg:hidden bg-pink-400 border-4 border-black flex justify-center items-center p-4 gap-4">
        <!-- Poster -->
        <div class="border-4 border-yellow-500 aspect-[2/3] w-40">
            <img src="../assets/img/Takopi-no-Genzai/cover.jpg"
                alt="Ilustrasi"
                class="w-full h-full object-cover" />
        </div>
        <!-- Score -->
        <div class="border-4 border-indigo-500 aspect-square w-20 flex items-center justify-center text-white">
            Score
        </div>
    </div>


    <section class="w-full border-4 border-red-500 p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md gap-4 border-4 border-green-500">

            <!-- Loop 8 gambar pertama (selalu tampil) -->
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 1"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 2"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 3"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 4"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 5"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 6"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>

            <!-- Gambar ke-7-8 (hidden di mobile) -->
            <div class="border-4 border-blue-500 aspect-video hidden md:block">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 7"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>
            <div class="border-4 border-blue-500 aspect-video hidden md:block">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 8"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>

            <!-- Gambar ke-9 (hidden di tablet) -->
            <div class="border-4 border-blue-500 aspect-video hidden lg:block">
                <img src="https://via.placeholder.com/640x360" alt="Gambar 9"
                    class="w-full h-full object-cover border-4 border-pink-500" />
            </div>

        </div>
    </section>


    <section class="border-4 border-red-500 py-8">
        <div class="border-4 border-green-500 max-w-2xl mx-auto text-center px-4">
            <p class="border-4 border-blue-500 text-lg leading-relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda voluptates unde cum id accusamus ipsum quisquam tenetur numquam labore maiores deserunt neque.
            </p>
        </div>
    </section>


    <section class="w-full border-4 border-red-500 p-4 flex flex-col gap-4">

        <!-- Bagian Atas -->
        <div class="border-4 border-green-500 flex justify-between max-md:flex-col gap-4 items-center p-4">
            <!-- Judul -->
            <h2 class="border-4 border-blue-500 text-xl font-bold">
                日本語タイトル | Judul Latin
            </h2>
            <!-- Icon Media Sosial -->
            <div class="border-4 border-yellow-500 flex gap-4">
                <span class="border-2 border-pink-500 w-6 h-6 flex items-center justify-center">FB</span>
                <span class="border-2 border-pink-500 w-6 h-6 flex items-center justify-center">IG</span>
                <span class="border-2 border-pink-500 w-6 h-6 flex items-center justify-center">TW</span>
            </div>
        </div>

        <!-- Bagian Bawah (Kotak Gambar) -->
        <div class="border-4 border-purple-500 grid grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1 gap-4">
            <div class="border-4 border-indigo-500 aspect-square">
                <img src="https://via.placeholder.com/300"
                    alt="Kotak 1"
                    class="w-full h-full object-cover border-2 border-pink-500" />
            </div>
            <div class="border-4 border-indigo-500 aspect-square">
                <img src="https://via.placeholder.com/300"
                    alt="Kotak 2"
                    class="w-full h-full object-cover border-2 border-pink-500" />
            </div>
            <div class="border-4 border-indigo-500 aspect-square">
                <img src="https://via.placeholder.com/300"
                    alt="Kotak 3"
                    class="w-full h-full object-cover border-2 border-pink-500" />
            </div>
            <div class="border-4 border-indigo-500 aspect-square">
                <img src="https://via.placeholder.com/300"
                    alt="Kotak 4"
                    class="w-full h-full object-cover border-2 border-pink-500" />
            </div>
        </div>


    </section>

</body>

</html>