<x-head />
    <header class="text-center bg-[#7cf448]">
        <img class="mx-auto" src="https://adrianoluis.net/wp-content/uploads/2020/02/191041327281-rm4_Hero_000000-1024x275.png" alt="">
    </header>
    <main>
        <section>
            @foreach ($lista as $info )
                <div class="">
                    <img src="{{ $info['image'] }}" alt="">
                </div>
            @endforeach
        </section>
    </main>
</body>
</html>
