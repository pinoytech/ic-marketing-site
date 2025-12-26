<div class="w-full bg-white h-72 md:h-auto">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-row justify-center items-center flex-wrap">
    <div class="flex flex-row gap-4 justify-center items-center w-full py-4">
      <h2 class="text-3xl font-semibold text-center">Trusted by over 100 companies of all sizes</h2>
    </div>
    <div class="w-3/4 flex flex-row flex-wrap justify-center items-center">
      @foreach ($featuredCompanies as $company)
        <div>
          @if($company->logo_path)
            <img src="{{ Storage::disk('resource')->url($company->logo_path) }}" alt="{{ $company->name }}" class="h-24 md:h-24 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @else
            <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="h-24 md:h-24 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @endif
        </div>
      @endforeach
    </div>
  </div>
  <div class="w-full">
    <div class='w-3/4 flex flex-row flex-wrap justify-center items-center mx-auto'>
      @foreach ($nonFeaturedCompanies as $company)
        <div>
          @if($company->logo_path)
            <img src="{{ Storage::disk('resource')->url($company->logo_path) }}" alt="{{ $company->name }}" class="h-18 md:h-18 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @else
            <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="h-18 md:h-18 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @endif
        </div>
      @endforeach
    </div>
  </div>
</div>
