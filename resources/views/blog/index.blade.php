<x-layout title="Blog">
  <article>
    @for ($i = 1; $i <= 3; $i++)
      <div class="pb-8 font-sans">
        <h3 class="text-2xl font-bold">Judul {{ $i }}</h3>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolor eius iusto quisquam,
          rem, error magnam
          dicta fuga officia ducimus quam ipsa adipisci facere? Aspernatur sapiente tempore nisi recusandae aperiam
          nobis aliquid quae possimus iusto iste illo quaerat, commodi nulla blanditiis delectus soluta nesciunt
          reiciendis voluptates similique, tenetur magni ipsam. Hic aspernatur ad, vitae nam voluptatibus adipisci
          animi
        </p>
      </div>
    @endfor
  </article>
</x-layout>
