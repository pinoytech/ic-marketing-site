<div class="w-full bg-white h-72 md:h-auto md:px-96 px-0">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-row justify-center items-center flex-wrap">
    <div class="flex flex-row gap-4 justify-center items-center w-full py-4">
      <h2 class="text-3xl font-semibold text-center">Trusted by over 100 companies of all sizes</h2>
    </div>
    <div class="w-3/4 flex flex-row justify-center items-center">
      @foreach ($featuredCompanies as $company)
        <div>
          @if($company->logo_path)
            <img src="{{ Storage::disk('resource')->url($company->logo_path) }}" alt="{{ $company->name }}" class="h-8 md:h-16 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @else
            <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="h-8 md:h-24 mx-4 my-8 inline-block object-contain" loading="lazy" />
          @endif
        </div>
      @endforeach
    </div>
  </div>
  <div class="max-w-screen-xl mx-auto px-4 md:px-0 w-full">
    <div class="w-full overflow-hidden relative mx-auto before:absolute before:left-0 before:top-0 before:bottom-0 before:w-32 before:bg-gradient-to-r before:from-white before:to-transparent before:z-10 after:absolute after:right-0 after:top-0 after:bottom-0 after:w-32 after:bg-gradient-to-l after:from-white after:to-transparent after:z-10">
      <div class="flex" style="animation: marquee 20s linear infinite; width: max-content;">
        <div class="flex">
          @foreach ($nonFeaturedCompanies as $company)
            <div class="flex-shrink-0">
              @if($company->logo_path)
                <img src="{{ Storage::disk('resource')->url($company->logo_path) }}" alt="{{ $company->name }}" class="h-8 md:h-18 mx-4 my-8 object-contain grayscale hover:grayscale-0 transition-all" loading="lazy" />
              @else
                <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="h-6 md:h-18 mx-4 my-8 object-contain" loading="lazy" />
              @endif
            </div>
          @endforeach
        </div>
        {{-- Exact duplicate --}}
        <div class="flex">
          @foreach ($nonFeaturedCompanies as $company)
            <div class="flex-shrink-0">
              @if($company->logo_path)
                <img src="{{ Storage::disk('resource')->url($company->logo_path) }}" alt="{{ $company->name }}" class="h-8 md:h-18 mx-4 my-8 object-contain grayscale hover:grayscale-0 transition-all" loading="lazy" />
              @else
                <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="h-6 md:h-18 mx-4 my-8 object-contain" loading="lazy" />
              @endif
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


