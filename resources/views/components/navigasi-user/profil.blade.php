<section class="container-profil">
    <figure></figure>
    <span>Welcome <p>Customer</p></span>
</section>
<style>
    .container-profil{
        height: 80%;
        display: flex;
        align-items:center;
        gap: 0.5rem;
        /* background-color:red; */
    }
    .container-profil figure{
        height: 100%;
        aspect-ratio:1/1;
        /* background-color: green; */
        border :2px solid var(--border);
        border-radius: 35%;

    }
    .container-profil span{
        display:inline-flex;
        gap:0.3rem;
        font-family: var(--font-secondary);
        color:var(--text);
        font-weight: 500;
    }
</style>
