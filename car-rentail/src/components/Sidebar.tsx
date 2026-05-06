

export default function Sidebar(){
    return(<>
        
        <div className="sidebar py-4 px-3 d-flex flex-column justify-content-between flex-shrink-0">
            <div>
                <div className="d-flex align-items-center mb-5 px-2">
                    <div className="logo-icon me-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="currentColor" />
                            <path d="M2 17L12 22L22 17M2 12L12 17L22 12" stroke="currentColor" strokeWidth="2"
                                strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                    </div>
                    <span className="fs-6 fw-bold lh-1" style={{letterSpacing: '-0.5px'}}>CAR<br />RENTAIL</span>
                </div>
                <nav className="nav flex-column gap-1">
                    <a href="#" className="nav-link-custom"><i className="fa-solid fa-house fa-fw"></i> Home</a>
                    <a href="#" className="nav-link-custom active"><i className="fa-solid fa-car fa-fw"></i> Vehicles</a>
                    <a href="#" className="nav-link-custom"><i className="fa-regular fa-note-sticky fa-fw"></i> Notes</a>
                    <a href="#" className="nav-link-custom"><i className="fa-regular fa-heart fa-fw"></i> Favourites</a>
                    <a href="#" className="nav-link-custom"><i className="fa-solid fa-clock-rotate-left fa-fw"></i> Recents</a>
                    <div className="my-2"></div>
                    <a href="#" className="nav-link-custom"><i className="fa-regular fa-bell fa-fw"></i> Notifications</a>
                    <a href="#" className="nav-link-custom"><i className="fa-regular fa-comment fa-fw"></i> Chat</a>
                </nav>
            </div>
            <nav className="nav flex-column gap-1">
                <a href="#" className="nav-link-custom"><i className="fa-regular fa-id-card fa-fw"></i> License</a>
                <a href="#" className="nav-link-custom"><i className="fa-regular fa-circle-question fa-fw"></i> Support</a>
                <a href="#" className="nav-link-custom"><i className="fa-solid fa-arrow-right-from-bracket fa-fw"></i>
                    Logout</a>
            </nav>
        </div>

    </>)
}