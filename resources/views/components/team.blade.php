<section id="team" class="py-8 text-center space-y-4">
    <p class="font-semibold text-lg">
        Our Team
    </p>
    <h3 class="md:text-4xl lg:text-6xl sm:text-3xl text-xl font-bold">
        Meet Our Team
    </h3>
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 mt-12">
        @php
            $teamMembers = [
                ['name' => 'John Doe', 'position' => 'CEO'],
                ['name' => 'Jane Smith', 'position' => 'CTO'],
                ['name' => 'Alice Johnson', 'position' => 'CFO'],
                ['name' => 'Bob Brown', 'position' => 'CMO'],
            ];
        @endphp
        @foreach ($teamMembers as $member)
            <x-team.person-item :name="$member['name']" :position="$member['position']" />
        @endforeach
    </div>
</section>

<style>
    #team {
        background: url('{{ asset('images/map-bg.jpg') }}') no-repeat center center;
        background-size: cover;
    }
</style>