<?php namespace Illuminate\Contracts\Pagination;

interface Paginator {

	/**
	 * Get the URL for a given page.
	 *
	 * @return string
	 */
	public function url($page);

	/**
	 * The the URL for the next page, or null.
	 *
	 * @return string|null
	 */

	public function nextPageUrl();

	/**
	 * Get the URL for the previous page, or null.
	 *
	 * @return string|null
	 */
	public function previousPageUrl();

	/**
	 * Get all of the items being paginated.
	 *
	 * @return array
	 */
	public function items();

	/**
	 * Get the "index" of the first item being paginated.
	 *
	 * @return int
	 */
	public function firstItem();

	/**
	 * Get the "index" of the last item being paginated.
	 *
	 * @return int
	 */
	public function lastItem();

	/**
	 * Determine how many items are being shown per page.
	 *
	 * @return int
	 */
	public function perPage();

	/**
	 * Determine the current page being paginated.
	 *
	 * @return int
	 */
	public function currentPage();

	/**
	 * Determine if there are enough items to split into multiple pages.
	 *
	 * @return bool
	 */
	public function hasPages();

	/**
	 * Determine if there is more items in the data store.
	 *
	 * @return bool
	 */
	public function hasMorePages();

	/**
	 * Render the paginator using a given Presenter.
	 *
	 * @param  Presenter  $presenter
	 * @return string
	 */
	public function render(Presenter $presenter = null);

}
