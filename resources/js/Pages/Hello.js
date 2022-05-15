import React from "react";
import { Head,Link } from "@inertiajs/inertia-react";

export default function Hello(props) {
    return (
        <>
            <Link href="/about">About</Link> <br />
            <Link href="/users">Users</Link>
            <Link href="/logout" method="post" as="button">Logout</Link>
            <Head title="Welcome" />
            <h1>Welcome</h1>
            <p>Hello welcome to your first Inertia app! </p>
        </>
    );
}
