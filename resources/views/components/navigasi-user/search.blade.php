<section class="container-search">
    <input type="text">
    <button class="btn-search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </button>
</section>

<style>
    .container-search {
        position: relative;
        height: 50px;
        /* Atur tinggi sesuai kebutuhan */
        width: 40rem;
        border-radius: 15px;
        /* Gunakan nilai yang lebih besar dari tinggi elemen */
        overflow: hidden;
        border: 2px solid var(--border);
        /* Tambahkan border agar kotak terlihat jelas */
        background-color: var(--base);
    }

    .container-search input {

        height: 100%;
        width: 100%;
        padding: 0 20px;
        /* Memberi jarak teks dari pinggir */
        border: none;
        /* Menghilangkan border bawaan input */
        outline: none;
        /* Menghilangkan garis biru saat diklik */
        background: transparent;
    }

    .btn-search {
        position: absolute;
        height: 80%;
        margin-right: 1rem;
        padding: 7px;
        color: var(--accent);
        /* background-color: red; */
        aspect-ratio: 1/1;
        right: 0;
        top: 50%;
        border-radius: 35%;
        transform: translateY(-50%);
    }
</style>
