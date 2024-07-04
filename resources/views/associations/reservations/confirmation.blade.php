
{{-- <form method="POST" action="{{ route('reservations.confirm', $reservation) }}">
    @csrf
    <button type="submit">Confirmer la réservation</button>
</form>

<form method="POST" action="{{ route('reservations.cancel', $reservation) }}">
    @csrf
    <button type="submit">Annuler la réservation</button>
</form> --}}
{{-- <p>Votre réservation a été soumise avec succès. Un email de confirmation vous a été envoyé.</p> --}}


<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<div class="fixed inset-0 z-40 flex items-center justify-center overflow-y-auto">
    
    <div aria-hidden="true" class="fixed inset-0 bg-black/50"></div>

    <div class="relative w-full max-w-sm bg-white dark:bg-gray-800 rounded-xl">
       
        <div class="p-4 space-y-4">
            <div class="text-center dark:text-white">
                <h1 class="text-2xl font-bold mb-4">Confirmation de Réservation</h1>

              
            </div>

            <div class="flex justify-center space-x-4">
                <!-- Cancel button -->
                <form method="POST" action="{{ route('reservations.cancel', $reservation) }}">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 px-4 text-sm text-gray-800 bg-white border-gray-300 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600 dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:text-gray-200 dark:focus:text-primary-400 dark:focus:border-primary-400 dark:focus:bg-gray-800">
                        Annuler la réservation
                    </button>
                </form>

                <!-- Confirm button -->
                <form method="POST" action="{{ route('reservations.confirm', $reservation) }}">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 px-4 text-sm text-white shadow focus:ring-white border-transparent bg-red-600 hover:bg-red-500 focus:bg-red-700 focus:ring-offset-red-700">
                        Confirmer la réservation
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
