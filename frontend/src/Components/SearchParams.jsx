import React from 'react';

const SearchParams = () => {
  const location = 'Seatle, WA';

  return (
    <div className="search-params ">
      <form>
        <label htmlFor="location">
          <input id="location" value={location} placeholder="Location" />
        </label>
        <button type="button">Submit</button>
      </form>
    </div>
  );
};

export default SearchParams;
