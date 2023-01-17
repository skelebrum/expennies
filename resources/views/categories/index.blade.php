<x-app-layout>
    <!-------------Modal------------------------>
    <div id="modal-background" class="flex justify-center">
        <form id="modal-content" class="hidden w-full max-w-sm">
            <div class="flex items-center border-b border-teal-500 py-2">
                <div>
                    <input
                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                        type="text" placeholder="Category name" aria-label="name" name="name" id="name">
                    @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <button id="add-button"
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                    type="submit">
                    Create
                </button>
                <button
                    class="cancel-button flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                    type="button">
                    Cancel
                </button>
            </div>
        </form>
    </div>
    <!-------------------------------------------->
    <p id="test">Test</p>
    <div class="dashboard">
        <div class="flex justify-end m-2 p-2">
            <button id="modal-button" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New
                category</button>
        </div>
        <div class="top-container flex flex-row mb-4 row g-0 rounded-lg">
            <div class="col-8 border-end border-3">
                <div class="flex flex-row justify-content-between">
                    <div class="col p-4">Expense $</div>
                    <div class="col p-4">Income $</div>
                    <div class="col p-4">Net $</div>
                </div>
                <div class="row">
                    <div class="col p-4">Line/Bar/Donut Graph</div>
                </div>
                <div id="button-container">
                    <button class="show bg-indigo-500" id="cbtn">Show all categories</button>
                </div>
            </div>
            <div class="col p-4">
                Latest Transactions
            </div>
        </div>
        <table id="categories-table" class="categories-container flex flex-row " id="cat-table">
            <tbody id="tbody">
              
            </tbody>
        </table>
    </div>
</x-app-layout>
