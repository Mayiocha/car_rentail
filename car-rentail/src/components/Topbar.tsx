

export default function Topbar(){
    return(<>
       <div className="topbar px-4 d-flex align-items-center justify-content-between border-bottom flex-shrink-0">
                <div className="d-flex gap-4 text-secondary fs-sm fw-medium">
                    <div><i className="fa-regular fa-clock me-2"></i>01:48 PM (UTC -7)</div>
                    <div><i className="fa-solid fa-location-arrow me-2"></i>San Francisco, US</div>
                </div>
                <div className="d-flex align-items-center gap-3">
                    <button className="btn btn-dark rounded-pill px-3 py-1 fw-medium fs-sm d-flex align-items-center gap-2">
                        <i className="fa-solid fa-crown text-warning" style={{fontSize: '0.8rem'}}></i> PRO features
                    </button>
                    <img src="https://i.pravatar.cc/150?img=11" alt="User"
                        className="rounded-circle border border-2 border-white shadow-sm" width="36" height="36" />
                </div>
            </div>
    </>)
}